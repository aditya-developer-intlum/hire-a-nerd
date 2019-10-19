<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial as TestimonialModel;

class Testimonial extends Controller
{
    public function __invoke()
    {
        return response()->json(TestimonialModel::orderBy("id","desc")->get());
    }
    public function destroy($id)
    {
        return response()->json(TestimonialModel::destroy($id));
    }
    public function store(Request $request)
    {   
        $this->check($request);
        $data = TestimonialModel::create($request->all());
        $response = [
            "id" => $data->id,
            "name" => $data->name,
            "designation" => $data->designation,
            "description" => $data->description,
            "created_at" => $data->created_at,
            "updated_at" => $data->updated_at
        ];
       return response()->json($response);
    }
    public function edit($id)
    {
        return response()->json(TestimonialModel::find($id));
    }
    public function update(Request $request,TestimonialModel $id)
    {   
          $this->check($request);
          $id->update($request->all());
        return response()->json($id);
    }
    private function check(Request $request){

        $request->validate([
            "name" => ["required","min:3","max:255"],
            "designation" =>["required","min:3","max:255"],
            "description" =>["required","min:3","max:500"],
        ]);

        return $this;
    }
}
