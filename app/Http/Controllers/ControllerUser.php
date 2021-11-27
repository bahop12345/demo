<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelUser;
use App\ModelMy_Admin;
use App\User;
use App\Http\Requests\RequestAdmin;
use DB;

class ControllerUser extends Controller
{
    // post admin
    public function postlistadmin(RequestAdmin $request){
     $addadmin = new ModelUser;
     $addadmin->email= $request->email;
     $addadmin->password= bcrypt($request->password);

     $addadmin->save();
     return redirect()->route('listadmin');

 }
    // add admin
 public function getlistadmin(){
    return view('Admin.adminuser.addadmin');
}
    // list admin
public function listadmin(Request $request){
 $list_admin = ModelMy_Admin::paginate(2);
 return view("Admin/adminuser/listadmin",["list_admin"=>$list_admin]);
}
    // Xóa admin
public function removeadmin(Request $request,$id){
    ModelMy_Admin::where('id','=',$id)->delete();
    return redirect("admin/adminuser/listadmin");
}
    // sửa admin
public function editadmin($id){
    $edit = ModelMy_Admin::where('id',$id)->first();
    $data =  DB::table('admin');
    return view('Admin.adminuser.editadmin',['edit'=>$edit]);
}
    // post update
public function posteditadmin( Request $request,$id){
    $admin = new ModelUser;
    $a['email']= $request->email;
    $a['password']= $request->password;

    $admin::where('id',$id)->update($a);
    return redirect()->intended('admin/adminuser/listadmin');
}
    //  tài khoản người dùng
    public function list_user(){
        $user=  User::paginate(2);
        return view("Admin/users/listuser",compact('user'));
    }
    // xóa tài khoản người dùng
     public function remove_user($id){
        $user= User::where('id','=',$id)->delete();
        return view("Admin/users/listuser",compact('user'));
    }
}
