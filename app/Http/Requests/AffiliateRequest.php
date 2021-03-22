<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\MaxWords;

class AffiliateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "first_name" => ["required","min:3","max:255"],
            "last_name" => ["required","min:3","max:255"],
            "email" => ["required","email","max:255","unique:affiliates,email"],
            "password" => ["required","min:6","max:255"],
            "phone_number" => ["required","numeric"],
            "skype_id" => ["required","min:3","max:255"],
            "country" => ["required","min:3","max:255"],
            "company_name" => ["nullable","min:3","max:255"],
            "website" => ["nullable","max:255"],
            "additional_info" => ["required",new MaxWords()],
            "confirmed" => ['accepted'],
        ];
    }
    public function messages()
    {
        return [
            "confirmed.accepted" => "Term and conditions must be accepted"
        ];
    }
}
