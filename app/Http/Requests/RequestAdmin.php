<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestAdmin extends FormRequest
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
            'email'=> 'required|email',
            'password' => 'required|unique:admin|min:6|max:12',
        ];
    }
    public function messages()
    {
        return
        [

            "email.required"=>"Vui lòng nhập email",
            "email.email"=>"Nhập sai cmnr bạn ơi !",
            "password.required"=>"Vui lòng nhập mật khẩu",
            "password.unique"=>"Mật khẩu bị trùng",
            "password.min"=>"Mật khẩu ít nhất 6 kí tự và lớn nhất 12 kí tự",
            "password.max"=>"Mật khẩu ít nhất 6 kí tự và lớn nhất 12 kí tự",
        ];
    }
}
