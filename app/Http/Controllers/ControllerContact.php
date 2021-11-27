<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelContact;
use DB;
class ControllerContact extends Controller
{
    // post add contact
    public function postcontact (Request $request){
        $getNameFile = $request->img->getClientOriginalName();
        $addcontact = new ModelContact;
        $addcontact->phone = $request->phone;
        $addcontact->email = $request->email;
        $addcontact->address = $request->address;
        $addcontact->map = $request->map;
        $addcontact->status = $request->status;
        $addcontact->logo = $getNameFile;
        $request->img->storeAs('avatar',$getNameFile);
        $addcontact->save();
        return redirect("admin/contact/listcontact");
    }
    // view add contact
    public function addcontact(){
       return view('Admin.contact.addcontact');
    }
    //list cantact
    public function listcontact(){
        $contact = ModelContact::all();
        return view("Admin/contact/listcontact",compact('contact'));
    }
    // xóa địa chỉ
    public function removecontact($id){
        DB::table('contact')->where('id','=',$id)->delete();
        return redirect("admin/contact/listcontact");
    }

}
