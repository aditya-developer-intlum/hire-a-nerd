<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\EmailListImport;
use App\Exports\EmailListExport;
use Maatwebsite\Excel\Facades\Excel;
use App\EmailList;
use Mail;
use Auth;
use App\EmailHistory;
use App\Mail\SendEmail;
class EmailController extends Controller
{
	private $emailHistory;
    public function __invoke(Request $request)
    {
    	$emails = EmailList::all();
    	$messages =  EmailHistory::where('user_id',Auth::id())->get();
    	return view('seller.email',compact('emails',"messages"));
    }
    public function storeEmail(Request $request)
    {
    		$request->validate([
    			"file" => ["required","mimes:xlsx"],
    		]);
    	Excel::import(new EmailListImport, $request->file);
    	return back()->with('success',"File Uploaded");
    }
    public function sendMail(Request $request)
    {
    	$this->emailHistory = new EmailHistory;
    	$this->check($request)->store($request)->Mail();
    	return back();
    }
    private function check(Request $request)
    {
    	$request->validate([
    		"message" => ['required'],
    		//"attached_file" => ['nullable','image']
    	]);
    	return $this;
    }
    private function store(Request $request)
    {
    	$this->emailHistory->user_id = $request->user()->id;
    	$this->emailHistory->message = $request->message;
    	//$this->emailHistory->file = $request->file->store('uploads/email/','public');
    	$this->emailHistory->save();
    	return $this;
    }
    private function Mail()
    {
    	$email = EmailList::select('email')->get();
    	if(!empty($email)){
    		foreach ($email as $mail) {
    			$emails[] = $mail->email;
    		}
    	Mail::to($emails)->send(new SendEmail($this->emailHistory));
    	}
    }
    public function downloadEmailList()
    {
    	return Excel::download(new EmailListExport, "email-list.xlsx");
    }
}
