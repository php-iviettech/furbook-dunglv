<?php

namespace Furbook\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCat extends FormRequest
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
            'cat_name'=>'required',
            'cat_date'=>'required'
        ];
    }
    public function messages(){
        return [
            'cat_name.required' => 'Please input Name of Cat',
            'cat_date.required' => 'Please input date of birth of Cat'
        ];
    }
}
