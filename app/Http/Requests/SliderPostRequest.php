<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderPostRequest extends FormRequest
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
                'title_az'=>'min:3|required',
                'title_en'=>'max:25',
                'title_ru'=>'max:25',
                'desc_az'=>'min:3|required',
                'desc_en'=>'max:25',
                'desc_ru'=>'max:25',
                'link'=>'min:3|required',

                'image'=>'required|mimes:jpeg,jpg|max:2000'


        ];
    }

    public function attributes()
    {

            return [
                'title_az'=>'Titile Az',
                'title_en'=>'Title En',
                'title_ru'=>'Title Ru',
                'desc_az'=>'Description Az',
                'desc_en'=>'Description En',
                'desc_ru'=>'Description Ru',
                'link_'=>'Link',



        ];
    }
}
