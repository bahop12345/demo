<?php

namespace App\Http\Controllers\product;
use App\Http\Requests\RequestProduct;
use App\Http\Controllers\Controller;
use App\ModelProduct;
use DB;
use App\ModelCategory;
use Illuminate\Http\Request;

class ControllerProduct extends Controller
{
    // add product
    // add product
    public function addproduct(){
        $category = ModelCategory::all();
        return view('Admin.product.addproduct',compact('category'));
    }
    // danh sách sản phẩm
    public function listproduct(){
        $list_pro = ModelProduct::orderBy('id','DESC')->paginate(5);
        return view("Admin/product/listproduct",["pro_list"=>$list_pro]);
    }
     public function unactive_product($id){
        ModelProduct::where('id',$id)->update(['status'=>0]);
         return redirect()->back();

    }
    public function active_product($id){
        ModelProduct::where('id',$id)->update(['status'=>1]);
        return redirect()->back();
    }
    //post add
    public function postproduct(RequestProduct $request){
        $getNameFile = $request->image->getClientOriginalName();
        $addproduct = new ModelProduct;
        $addproduct->category_id = $request->cat_id;
        $addproduct->pro_name = $request->pro_name;
        $addproduct->price = $request->price;
        $addproduct->status = $request->status;
        $addproduct->description = $request->description;
        $addproduct->image = $getNameFile;
        $request->image->storeAs('avatar',$getNameFile);
        $addproduct->save();
        return redirect("admin/product/listproduct");
    }
    //xóa sản phẩm
    public function removeproduct($id){
        ModelProduct::where('id','=',$id)->delete();
        return redirect("admin/product/listproduct");
    }
    //sửa sản phẩm
    public function editproduct($id){
       $edit = ModelProduct::where('id',$id)->first();
       $data = ModelCategory::all();
       return view('Admin.product.editproduct',['edit'=>$edit,'listcat'=>$data,]);
   }
    // post update
   public function posteditproduct( Request $request,$id){
    $product = new ModelProduct;
    $a['category_id'] = $request->cat_id;
    $a['pro_name'] = $request->pro_name;
    $a['price']= $request->price;
    $a['description']= $request->description;
    $a['status']= $request->status;


    if ($request->hasFile('image')) {
        $image = $request->image->getClientOriginalName();
        $a['image'] = $image;
        $request->image->storeAs('avatar',$image);
    }

    $product::where('id',$id)->update($a);
    return redirect()->intended('admin/product/listproduct');
}
    // tìm sản phẩm
public function searchproduct(){
    $search_text = $_GET['search'];
    $pro_list = ModelProduct::where('pro_name','like','%'.$search_text.'%')->get();
    return view('Admin.product.search',compact('pro_list'));
}
}


