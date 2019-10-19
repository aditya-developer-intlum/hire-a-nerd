<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Suspend;
use App\Models\UserBillingAddress;
use App\Models\UserDetail;
use App\User;
use Auth;
use Excel;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Session;
use Validator;

class UserController extends Controller {
	use SendsPasswordResetEmails;

	private $user;

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		if ($request->user()->can('viewAny', User::class )) {
			$this->setTableSize($request)
			     ->find($request)
			     ->loadData($request)
			     ->search($request);

			return view('admin.user.view', ['user' => $this->user]);
		} else {
			abort(404);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request, Country $country) {
		if ($request->user()->can('create', User::class )) {
			return view('admin.user.create', compact('country'));
		} else {
			abort(404);
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		if ($request->user()->can('create', User::class )) {
			$this->check($request);
			$user = User::create([
					'name'          => sprintf('%s %s', $request->first_name, $request->last_name),
					'email'         => $request->email,
					'mobile_number' => $request->mobile_number,
					'password'      => bcrypt($request->password),
				]);
			UserBillingAddress::create([
					'user_id'    => $user->id,
					'full_name'  => $user->name,
					'country_id' => $request->country,
					'address'    => $request->address,
				]);
			if ($request->has('avatar')) {
				UserDetail::create([
						'user_id' => $user->id,
						'avatar'  => $request->avatar->store('uploads/user/avatar', 'public')
					]);
			}

			return back()->with('success', 'User Added');
		} else {
			abort(404);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(User $user) {
		if (Auth::user()->can('view', User::class )) {
			$user = $user->load(
				'userDetail',
				'userLang.language',
				'userCertification',
				'userEducation.country',
				'userEducation.university',
				'skill',
				'userBillingAaddresses'
			);
			return view('admin.user.show', compact('user'));
		} else {
			abort(404);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $user, Country $country) {

		if (Auth::user()->can('update', User::class )) {

			$user = $user->load('userBillingAaddresses', 'userDetail');
			return view('admin.user.edit', compact('user', 'country'));

		} else {
			abort(404);
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, User $user) {
		if (Auth::user()->can('update', User::class )) {

			$this->check($request, $user);
			$user->update([
					'name'          => sprintf('%s %s', $request->first_name, $request->last_name),
					'email'         => $request->email,
					'mobile_number' => $request->mobile_number,
				]);
			$user->userBillingAaddresses()->update([
					'full_name'  => $user->name,
					'country_id' => $request->country,
					'address'    => $request->address,
				]);
			if ($request->has('avatar')) {
				$user->userDetail->update([
						'avatar' => $request->avatar->store('uploads/user/avatar', 'public')
					]);
			}

			return back()->with('success', 'User Updated');
		} else {
			abort(404);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(User $user) {
		if (Auth::user()->can('delete', User::class )) {

			$user->delete();

		} else {
			abort(404);
		}
	}
	/**
	 * Validate Request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return $this
	 */
	private function check(Request $request, $user = '') {
		if (!empty($user->id)) {
			$id = $user->id;
		} else {
			$id = "";
		}

		$request->validate([
				'first_name'    => 'required',
				'last_name'     => 'required',
				'email'         => "required|unique:users,email,$id,id",
				'mobile_number' => "required|numeric",
				'address'       => 'required',
				'country'       => 'required',
				'avatar'        => 'nullable|image',
				'password'      => 'nullable',
			]);
		return $this;
	}
	public function status(User $user, $status) {

		if (Auth::user()->can('status', User::class )) {
			switch ($status) {
				case 1:
					$status = 0;
					break;
				case 0:
					$status = 1;
					break;
				case 2:
					$status = 1;
					break;

			}
			$user->update(['status' => $status]);
			return back();
		} else {
			abort(404);
		}
	}
	public function suspend(Request $request, User $user) {
		if (Auth::user()->can('suspend', User::class )) {
			$validator = Validator::make($request->all(), [
					'number_of_days' => 'required|numeric',
					'region'         => 'required'
				]);
			if ($validator->fails()) {

				return response()->json(['errors' => $validator->errors()]);
			}

			$user->update(['status' => 2]);
			return Suspend::create([
					'user_id'        => $user->id,
					'suspend_days'   => $request->number_of_days,
					'suspend_region' => $request->region
				]);
		} else {
			abort(404);
		}
	}
	private function find(Request $request) {
		if ($request->has('search')) {
			Session::put('search_user', $request->search);
		}
		return $this;
	}
	public function remove() {
		Session::forget('search_user');
	}
	private function setTableSize(Request $request) {
		if ($request->has('display')) {
			Session::put('user_table_size', $request->display);
		}
		return $this;
	}
	private function loadData(Request $request) {
		if (empty(Session::get('search_user'))) {
			$this->user = User::with('userDetail',
				'userLang',
				'userCertification',
				'userEducation',
				'skill',
				'userBillingAaddresses'
			)
			->orderBy('id', 'desc')
			->where('type', 0)->paginate(Session::get('user_table_size')??10);
		}
		return $this;
	}
	private function search(Request $request) {
		if (!empty(Session::get('search_user'))) {

			$search     = Session::get('search_user');
			$this->user = User::with('userDetail',
				'userLang',
				'userCertification',
				'userEducation',
				'skill',
				'userBillingAaddresses'
			)
			->orderBy('id', 'desc')
			->where('name', 'like', '%'.$search.'%')
			->orWhere('email', 'like', '%'.$search.'%')
			->orWhere('mobile_number', 'like', '%'.$search.'%')
			->orWhereHas('userBillingAaddresses', function ($q) use ($search) {

					$q->where('country_id', 'like', '%'.$search.'%');

				})
				->where('type', 0)	->paginate(Session::get('user_table_size')??10);
		}
		return $this;
	}
	public function downloadExcel($type) {
		if (Auth::user()->can('download', User::class )) {
			return Excel::download(new UsersExport, "users.{$type}");
		} else {
			abort(404);
		}
	}
	public function login(User $user) {
		if (Auth::user()->can('loginAs', User::class )) {
			$user->update(["token"         => str_random(255)]);
			return response()->json(["url" => url("admin/account/user/token/$user->token")]);
		} else {
			abort(404);
		}
	}
	public function verifyToken($token) {
		$user = User::where("token", $token)->firstOrFail();
		Auth::login($user);
		$user->token = "";
		$user->save();
		return redirect("account");
	}
	/**
	 * Send a reset link to the given user.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
	 */
	public function sendResetLinkEmail(Request $request) {
		$validator = Validator::make($request->all(), [

				"email" => "required|email|exists:users",
			], [
				"email.exists"   => "Email Id is not Belong to us",
				"email.required" => "Please Update User Email Id",
			]);

		if ($validator->fails()) {
			return response()->json(array(
					'success' => false,
					'errors'  => $validator->getMessageBag()->toArray()

				), 201);// 400 being the HTTP code for an invalid request.
		}

		// We will send the password reset link to this user. Once we have attempted
		// to send the link, we will examine the response then see the message we
		// need to show to the user. Finally, we'll send out a proper response.
		$response = $this->broker()->sendResetLink(
			$this->credentials($request)
		);

		// return $response == Password::RESET_LINK_SENT
		//             ? $this->sendResetLinkResponse($request, $response)
		//             : $this->sendResetLinkFailedResponse($request, $response);

		if (Password::RESET_LINK_SENT) {
			return response()->json([
					'success' => true,
					'message' => "Reset link is sended on User email Id"
				]);
		}

		abort(422);
	}

}
