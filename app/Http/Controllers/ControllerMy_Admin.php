<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ModelMy_Admin;
use DB;

class ControllerMy_Admin extends Controller
{
    //Login-here
    public function login(){
        return view('Admin/Layout/login');
    }
    //post

    public function postlogin(Request $request){
        if(Auth::guard('admin')->attempt(['email'=>$request->Username,'password'=>$request->Password]))
        {
         $request->session()->put('email',$request->Username);
         return redirect()->route("listproduct");

     }
     else
     {
      return redirect()->route("login")->with('ThongBao',"Tài Khoản Hoặc Mật Khẩu Không chính Xác !");
  }
}
public function logout(){
    Auth::guard('admin')->logout();
    return redirect()->route("login");
}
}
