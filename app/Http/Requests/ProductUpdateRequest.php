<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'title_az' =>'required|min:3',
            'title_ru' =>'required|min:3',
            'title_en' =>'required|min:3',
            'image' => 'mimes:jpeg,jpg,png|max:2000'
        ];
    }

    public function attributes()
    {
        return [
            'title_az' =>"Title Az",
            'title_en' =>"Title En",
            'title_ru' =>"Title Ru",
            'image' =>'Image'
        ];
    }
}
