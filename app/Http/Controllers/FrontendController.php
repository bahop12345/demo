<?php
namespace App\Http\Controllers;

use App\Model\banner;
use App\Model\product;
use App\Model\contact;
use App\Model\Category;
use App\Model\Cart;
use App\Model\Blogs;
use Mail;
use DB;
use Session;
use Illuminate\Http\Request;

/*

 */
class FrontendController extends Controller
{
	public function index()
	{
		$banner_3 = banner::where('position',3)->limit(1)->get();
		$banner_2 = banner::where('position',2)->limit(2)->get();
		$banner = banner::where('position',1)->get();
		$category = Category::all();
		$product_nb = Product::where('status',1)->take(20)->get();
		$product_new = Product::limit(10)->orderBy('created_at','DESC')->take(20)->get();
		$product = Product::where('status',1)->limit(2)->get();

		$blog = Blogs::orderBy('created_at','DESC')->take(3)->get();
		return view('frontend.pages.index',compact('banner', 'product','product_new','product_nb','banner_2','banner_3','blog','category'));
	}
	public function about()
	{	
		$blog = Blogs::take(3)->get();
		$banner_4 = Banner::where('position',4)->limit(1)->get();
		return view('frontend.pages.about',compact('blog','banner_4'));
	}
	public function contact_us()
	{

		return view('frontend.pages.contact_us');
	}
	public function Postcontact_us(Request $req)
	{

		Mail::send('Mail.contact',[
			'name'=>$req->name,
			'content'=>$req->content,
		], function($email) use ($req){
			$email->to('anhtungagg@gmail.com',$req->name);
			$email->from($req->email);

			$email->subject('liên hệ');
		});
		return redirect()->back()->with('thongbao','bạn đã gửi liên hệ thành công');
	}
	public function faq()
	{

		$banner_4 = Banner::where('position',4)->limit(1)->get();
		return view('frontend.pages.faq');
	}
	public function AddCart(Request $req,$id,$quantity=1)
	{
		$quantity=(int) $quantity;
		$product =product::where('id',$id)->first();
		$category_pro = Product::where('category_id',$id)->paginate(12);
		if($product != null){
			$oldCart = Session('cart')?Session('cart'):null;
			$newCart = new Cart($oldCart);
			if ($quantity>0 ) {
				if ($quantity!=1) {
					$newCart->AddCart($product,$id,$quantity);
				}else{
					$newCart->AddCart($product,$id);
				}
					$req->session()->put('cart',$newCart);
				
			}else{
				return view('frontend.cart.cart');
			}
			
		}
		return view('frontend.cart.cart');

	}
	public function Addsave(Request $req,$id,$quanty)
	{
		$product =product::where('id',$id)->first();
		$category_pro = Product::where('category_id',$id)->paginate(12);
		if($product != null){
			$oldCart = Session('cart')?Session('cart'):null;
			$newCart = new Cart($oldCart);
			$newCart->AddCart($product,$id);
			
			$req->session()->put('cart',$newCart);
		}
		return view('frontend.cart.cart');

	}
	 public function DeleteItemCart(Request $req,$id){
        $oldCart = Session('cart')?Session('cart'):null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if(count($newCart->products)>0){
            $req->Session()->put('cart',$newCart);
        }
        else{
            $req->Session()->forget('cart');
        }
       return view('frontend.cart.cart');
    }

}
?>
