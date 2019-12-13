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

            "gig_photo_one" => [
                                  'required',
                                  'mimes:jpg,jpeg,gif,png,webp',
                                  'dimensions:max_width=700,
                                  max_height=500,
                                  min_width=500,
                                  min_height=350'
                                ],
            "gig_photo_two" => [
                                 'nullable','mimes:jpg,jpeg,gif,png,webp',
                                 'dimensions:max_width=700,
                                  max_height=500,
                                  min_width=500,
                                  min_height=350'
                                ],
            "gig_photo_three" => [
                                  'nullable','mimes:jpg,jpeg,gif,png,webp',
                                  'dimensions:max_width=700,
                                  max_height=500,
                                  min_width=500,
                                  min_height=350'
                                ],
            "gig_video" => ['nullable','mimes:mp4,flv,m3u8,ts,3gp,mov,avi,wmv,mkv','max:10240'],
            "gig_pdf_one" => ["nullable","mimes:pdf","max:10000"],
            "gig_pdf_two" => ["nullable","mimes:pdf","max:10000"]
        ];
    }

    public function messages()
    {
       return [
                "gig_photo_one.required" => "Service Photo are required",
                "gig_photo_one.mimes" => "Service Photo Must be Image",
                "gig_photo_one.dimensions" => "Image Dimension max 700*500 and min 500*350",
                "gig_photo_two.required" => "Service Photo are required",
                "gig_photo_two.dimensions" => "Image Dimension max 700*500 and min 500*350",
                "gig_photo_three.dimensions" => "Image Dimension max 700*500 and min 500*350",
                "gig_photo_three.required" => "Service Photo are required",
                "gig_photo_one.mimes" => "Service Photo must be Image",
                "gig_photo_two.mimes" => "Service Photo must be Image",
                "gig_photo_three.mimes" => "Service Photo must be Image",
                "gig_video.required" => "Gig Video is required",
                "gig_video.mimes" => "Gig Video must be Video",
                "gig_video.max" => "Gig Video max size 10mb",
                "gig_pdf_one.required" => "Service PDF is required",
                "gig_pdf_one.mimes" => "Service PDF must have extenstion .pdf",
                "gig_pdf_two.required" => "Service PDF is required",
                "gig_pdf_two.mimes" => "Service PDF must have extenstion .pdf",
                "gig_pdf_one.max" => "Service PDF max size 10mb",
                "gig_pdf_two.max" => "Service PDF max size 10mb",
        ];
    }
}
