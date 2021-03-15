<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactPostRequest extends FormRequest
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
            'address'=>'required|min:5',
            'tel1' =>'required',
            'email' =>'required|email',
            'facebook'=>'max:200',
            'insta'=>'max:200',
            'twitter'=>'max:200',
            'linedin'=>'max:200',




        ];
    }

    public function attributes()
    {
        return [
            'address'=>'Address',
            'tel1' =>'Phone',
            'email' =>'Email',
            'facebook'=>'Facebook',
            'insta'=>'Instagram',
            'twitter'=>'Twitter',
            'linedin'=>'Linedin',
            'maplink'=>'Locatin',

        ];
    }
}
