<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckPostRequest extends FormRequest
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
            'description' => ['required','max:2500'],
            'attachfile' => ['nullable','mimes:jpg,jpeg,gif,png,pdf,xls,xlsx,docx,doc,zip'],
            'category' => ['required','numeric'],
            'subcategory' => ['required','numeric'],
            'serviceDeliverTime' => ['required'],
            'budget' => ['required','numeric']
        ];
    }
    public function messages()
    {
        return [
            'attachfile.mimes' => "Invalide File type"
        ];
    }
}
