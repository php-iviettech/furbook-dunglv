<?php

namespace Furbook\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validate_Edit extends FormRequest
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
            'cat_edit_name'=>'required',
            'cat_edit_date'=>'required'
        ];
    }
    public function messages(){
        return [
            'cat_edit_name.required' => 'Please input Name Edit of Cat',
            'cat_edit_date.required' => 'Please input date of birth Edit of Cat'
        ];
    }
}
