<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
    //kiểm tra đầu vào
    public function rules()
    {
        return [
            'pro_name' => 'required|unique:product|min:3|max:100',
            'image' => 'file|required',
            'cat_id' => 'required',
            'price' => 'required|numeric',
            
        ];
    }
    //thông báo lỗi khi nhập sai
    public function messages(){
        return
        [
            "pro_name.unique"=>"Tên sản phẩm bị trùng",
            "pro_name.required"=>"Nhập tên sản phẩm",
            "pro_name.min"=>"Độ dài tên ít nhất 3 kí tự",
            "pro_name.max"=>"Độ dài tên dài nhất 100 kí tự",
            "image.image"=>"Ảnh có định dạng:jpeg,png,jpg,gif",
            "image.required"=>"không có Ảnh",
            "cat_id.required"=>"Danh mục bị trống",
            "price.required"=>"Giá bị trống",
            "price.numeric"=>"Giá là số",
            "content.required"=>"Mô tả bị trống",
            
        ];
    }
}
