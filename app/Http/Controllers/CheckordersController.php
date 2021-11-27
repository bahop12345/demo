<?php
namespace App\Http\Controllers;
use App\Model\contact;
use App\Model\Cart;
use App\Model\Orders;
use App\Model\Order_detail;
use App\Model\Payment_method;
use App\User;
use Auth;
use DB;
use Session;
use Illuminate\Http\Request;
/*   */
class CheckordersController extends Controller {


	public function Checkout() 	{
        $pay = Payment_method::get();
 
		return view('frontend.checkout.shopping_1',compact('pay'));
	}
	public function __construct(){
		$this->middleware('userlogin');
	}
	public function PostCheckout(Request $req) 	{
		
		$cart = Session::get('cart');
		if(isset(Auth::guard('userlogin')->user()->id)){
			$orders = new Orders;
			$orders->user_id = Auth::guard('userlogin')->user()->id;
			$orders->name = $req->name;
			$orders->city = $req->city;
			$orders->district = $req->district;
			$orders->commune = $req->commune;
			$orders->email = $req->email;
			$orders->phone = $req->phone;
            $orders->total_price =$cart ->totalPrice;
            $orders->payment_id = $req->payment_method;
			$orders->save();
		}

		foreach ($cart->products as $key => $value){
			$order_detail = new Order_detail;
			$order_detail->order_id = $orders->id;
			$order_detail->product_id = $key;
			$order_detail->quantity = $value['quanty'];;
			$order_detail->price = ($value['price']);
			$order_detail->save();
		}
		Session::forget('cart');

		return redirect()->back()->with('thongbao','Đặt hàng thành công');
	}


	}
	?>
