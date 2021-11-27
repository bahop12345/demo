<?php
namespace App\Http\Controllers;
use App\Model\contact;
use App\Model\Category;
use App\Model\product;
use App\Model\banner;
use App\Model\Comments;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;



/*

 */
class ProductController extends Controller
{
	public function product(request $req)
	{
		$category = Category::all();
		$product = Product::paginate(9);
		$banner_4 = Banner::where('position',4)->limit(1)->get();
		return view('frontend.pages.product',compact('category','product','banner_4'));
	}

	public function catproduct($id)
	{	
		$category = Category::all();
		$banner_4 = Banner::where('position',4)->limit(1)->get();
		$category_pro = Product::where('category_id',$id)->paginate(9);
		return view('frontend.pages.categoryproduct',compact('category_pro','category','banner_4'));
	}
	
	public function product_detail($id)
	{	$sanpham = Product::where('id',$id)->get();

	foreach ($sanpham as $key => $value) {
		$category_id = $value->category_id;
	}
	$comment = Comments::where('product_id',$id)->where('status',1)->get();	

	$banner_4 = Banner::where('position',4)->limit(1)->get();
	$lienquan = Product::where('category_id',$category_id)->whereNotIn('id',[$id])->get();

	return view('frontend.pages.product_detail',compact('sanpham','banner_4','lienquan','comment'));
}
public function search(request $req){
	$category = Category::all();
	$banner_4 = Banner::where('position',4)->limit(1)->get();
	(Int)$min = $req->minValue;
	(Int)$max = $req->maxValue;
	$prod = product::where('pro_name','LIKE','%'.$req->search.'%')->whereBetween('price',[$min,$max])->get();
	$head_search = product::where('pro_name','LIKE','%'.$req->search.'%')->whereBetween('price',[$min,$max])->get();
	return view('frontend.pages.search',compact('prod','category','banner_4','head_search'));
}
public function head_search(request $req){
	$category = Category::all();
	$banner_4 = Banner::where('position',4)->limit(1)->get();
	$search = product::where('pro_name','LIKE','%'.$req->search.'%')->get();
	return view('frontend.pages.head_search',compact('category','banner_4','search'));
}

public function postproduct(request $req,$id){
	if(isset(Auth::guard('userlogin')->user()->id)){
		$comment = new Comments;
		$comment->user_id = Auth::guard('userlogin')->user()->id;
		$comment->content = $req->content;
		$comment->product_id = $id;
		$comment->status = 1;
		$comment->save();
		return redirect()->back()->with('thanhcong','bình luận thành công');
	}

}


}
?>