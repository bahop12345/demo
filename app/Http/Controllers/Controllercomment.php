<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Comments;
use App\User;
use App\Model\Product;


use App\ModelContact;
use DB;
class Controllercomment extends Controller
{
    
    
    //list cantact
    public function listcomment(){
        $comment = Comments::orderBy('created_at','DESC')->take(9)->get();
        return view("Admin/comment/listcomment",compact('comment'));
    }
    // xóa địa chỉ
    public function removecomment($id){
        Comments::where('id','=',$id)->delete();
       return redirect()->back();
    }
     public function unactive_comment($id){
        Comments::where('id',$id)->update(['status'=>0]);
         return redirect()->back();

    }
    public function active_comment($id){
        Comments::where('id',$id)->update(['status'=>1]);
        return redirect()->back();
    }
    public function searchcomment(request $req){
    $head_search = Comments::where('content','LIKE','%'.$req->search.'%')->get();
    return view('Admin.comment.search',compact('head_search'));
}

}
