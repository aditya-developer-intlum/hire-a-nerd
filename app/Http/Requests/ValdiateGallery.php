<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValdiateGallery extends FormRequest
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

            "gig_photo_one" => ['required','mimes:jpg,jpeg,gif,png,webp'],
      /*      "gig_photo_two" => ['required','mimes:jpg,jpeg,gif,png,webp'],
            "gig_photo_three" => ['required','mimes:jpg,jpeg,gif,png,webp'],
            "gig_video" => ['required','mimes:mp4,flv,m3u8,ts,3gp,mov,avi,wmv,mkv','max:500000'],
            "gig_pdf_one" => ["required","mimes:pdf","max:10000"],
            "gig_pdf_two" => ["required","mimes:pdf","max:10000"]*/
        ];
    }

    public function messages()
    {
       return [
                "gig_photo_one.required" => "Gig Photo are required",
                /*"gig_photo_two.required" => "Gig Photo are required",
                "gig_photo_three.required" => "Gig Photo are required",
                "gig_photo_one.mimes" => "Gig Photo must be Image",
                "gig_photo_two.mimes" => "Gig Photo must be Image",
                "gig_photo_three.mimes" => "Gig Photo must be Image",
                "gig_video.required" => "Gig Video is required",
                "gig_video.mimes" => "Gig Video must be Video",
                "gig_video.max" => "Gig Video max size 400mb",
                "gig_pdf_one.required" => "Gig PDF is required",
                "gig_pdf_one.mimes" => "Gig PDF must have extenstion .pdf",
                "gig_pdf_two.required" => "Gig PDF is required",
                "gig_pdf_two.mimes" => "Gig PDF must have extenstion .pdf",
                "gig_pdf_one.max" => "Gig PDF max size 10mb",
                "gig_pdf_two.max" => "Gig PDF max size 10mb",*/
        ];
    }
}
