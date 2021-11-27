<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelBlogs;
use DB;

class ControllerBlogs extends Controller
{
   public function postaddblog(Request $request){
     $getNameFile = $request->image->getClientOriginalName();
     $addblog = new ModelBlogs;
     $addblog->title = $request->title;
     $addblog->sumary = $request->sumary;
     $addblog->content = $request->content;
     $addblog->status = $request->status;
     $addblog->image = $getNameFile;
     $request->image->storeAs('avatar',$getNameFile);
     $addblog->save();
     return redirect()->route("listblogs");
 }
 public function addblog(){
    return view("Admin/blogs/addblog");
}
public function listblogs(){
   $listblogs = ModelBlogs::paginate(3);
   return view('Admin.blogs.listblogs',["listblogs"=>$listblogs]);
}
            // xóa tin tức sự kiện (blogs)
public function removeblogs($id){
    ModelBlogs::where('id','=',$id)->delete();
    return redirect("admin/blogs/listblogs");
}
            // sửa tin tức sự kiện
public function editblog($id){
  $edit =  ModelBlogs::where('id',$id)->first();
 return view('Admin.blogs.editblogs',compact("edit"));
}
            // post update danh mục tin tức
public function posteditblog(Request $request, $id){
    $blogs = new ModelBlogs;
    $a['title'] = $request->title;
    $a['sumary']= $request->sumary;
    $a['content']= $request->content;
    $a['status']= $request->status;


    if ($request->hasFile('image')) {
        $img = $request->image->getClientOriginalName();
        $a['image'] = $img;
        $request->image->storeAs('avatar',$img);
    }

    $blogs::where('id',$id)->update($a);

    return redirect()->route("listblogs");
}
// tìm kiếm tin tức
     public function searchblogs(){
        $search_text = $_GET['search'];
        $listblogs= ModelBlogs::where('title','like','%'.$search_text.'%')->get();
        return view('Admin.blogs.searchblogs',compact('listblogs'));
    }
}
