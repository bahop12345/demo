<?php

namespace App\Http\Controllers\banner;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelBanner;
use App\Http\Requests\RequestBanner;
use DB;



class ControllerBanner extends Controller
{
    //post banner
    public function postlistbanner (Request $request){

       $getNameFile = $request->img->getClientOriginalName();
       $request->img->storeAs('avatar',$getNameFile);
       $addbanner = new ModelBanner;
      
       $addbanner->title= $request->title;
       $addbanner->position= $request->position;
       $addbanner->image = $getNameFile;
       $addbanner->save();
       return redirect()->route('listBanner');
   }
       // add banner
   public function addbanner(){
    return view('Admin.banner.addbanner');
}
public function listBanner(){
    $list_banner = ModelBanner::paginate(2);
    return view("Admin/banner/listbanner",["list_ban"=>$list_banner]);
}
    // xóa banner
public function removebanner($id){
   ModelBanner::where('id','=',$id)->delete();
    return redirect("admin/banner/listBanner");
}
public function editbanner($id){
 $edit = ModelBanner::where('id',$id)->first();
 $data = ModelBanner::all();
 return view('Admin.banner.editbanner',['edit'=>$edit,'listcat'=>$data]);
}
    // sửa banner
public function posteditbanner( Request $request,$id){
    $banner = new ModelBanner;
   
    $a['title']= $request->title;
    $a['position']= $request->position;


    if ($request->hasFile('img')) {
        $img = $request->img->getClientOriginalName();
        $a['image'] = $img;
        $request->img->storeAs('avatar',$img);
    }

    $banner::where('id',$id)->update($a);
    return redirect()->intended('admin/banner/listBanner');
}
    // tìm kiếm banner
public function searchbanner(){
    $search_text = $_GET['search'];
    $list_banner= ModelBanner::where('title','like','%'.$search_text.'%')->get();
    return view('Admin.banner.searchbanner',compact('list_banner'));
}
}
