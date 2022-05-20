<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPostsRequest extends FormRequest
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
            'title'=>'required',
            'short_text'=>'required',
            'text'=>'required',

        ];
    }
    
public function messages(){
  
return[
'title.required'=>'გთხოვთ მიუთითოთ სათაური',
'short_text.required'=>'გთხოვთ მიუთითოთ მოკლე ტექსტი',
'text.required'=>'გთხოვთ მიუთითოთ ტექსტი'
];
}
}
