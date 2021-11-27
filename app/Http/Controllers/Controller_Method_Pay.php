<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Payment_method;
use App\Model\Orders;
use App\Http\Requests\Request_Method_Pay;
use DB;

class Controller_Method_Pay extends Controller
{
    // post method pay
    public function postlistmethodpay(Request_Method_Pay $request){
        $addmethodpay = new Model_Method_Pay;
        $addmethodpay->payment_method = $request->payment_method;
        $addmethodpay->save();
        return redirect()->route("listaddmethodpay");
    }
    public function getaddmethodpay(){
        return view("Admin/method_pay/add_method_pay");
    }
    // danh sách phương thức
    public function listaddmethodpay(){
        $list_pay = Payment_method::paginate(3);
        return view('Admin.method_pay.list_method_pay',compact('list_pay'));
    }


    // xóa phương thức thanh toán
    public function removemethodpay($id){
        Orders::where('payment_id',$id)->delete();
        Payment_method::where('id','=',$id)->delete();

        return redirect()->route("listaddmethodpay");
    }


    //sửa method
    public function editmethodpay($id){
     $edit = Payment_method::where('id',$id)->first();
     return view('Admin.method_pay.edit_method_pay',['edit'=> $edit]);
 }


    // post update method
 public function posteditmethodpay( Request_Method_Pay $request,$id){
    Payment_method::where('id','=',$id)->update(
        [
            'payment_method'=> $request->payment_method,

        ]
    );
    return redirect()->route("listaddmethodpay");
}
  // tìm kiếm phương thức thanh toán
     public function searchpay(){
        $search_text = $_GET['search'];
        $list_pay= Payment_method::where('name','like','%'.$search_text.'%')->get();
        return view('Admin.method_pay.searchpay',compact('list_pay'));
    }
}
