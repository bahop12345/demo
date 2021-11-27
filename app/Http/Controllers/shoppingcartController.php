<?php 
namespace App\Http\Controllers;
use App\Model\contact;
use App\Model\Cart;
use App\User;
use Auth;
use DB; 
use Session; 
use Illuminate\Http\Request;
/*   */ 
class shoppingcartController extends Controller { 	

	public function shopping_cart() {	 			
		return view('frontend.cart.shopping_cart');
	} 	

	
	public function DeleteItemShopCart(Request $req,$id){
		$oldCart = Session('cart')?Session('cart'):null;
		$newCart = new Cart($oldCart);
		$newCart->DeleteItemCart($id);
		if(count($newCart->products)>0){
			$req->Session()->put('cart',$newCart);
		}
		else{
			$req->Session()->forget('cart');
		}
		return view('frontend.cart.shopping_cart');
	}
	public function SaveItemShopCart(Request $req,$id,$quanty){
		$oldCart = Session('cart')?Session('cart'):null;
		$newCart = new Cart($oldCart);
		$newCart->UpdateItemCart($id,$quanty);

		$req->Session()->put('cart',$newCart);

		return view('frontend.cart.list-cart');
	}
	public function SaveAllItemShopCart(Request $req){
		foreach ($req->data as $item) {
			
			$oldCart = Session('cart')?Session('cart'):null;
			$newCart = new Cart($oldCart);
			$newCart->UpdateItemCart($item["key"],$item["value"]);
			$req->Session()->put('cart',$newCart);
		}
	}
	public function DellAllItemShopCart(Request $req){
		
		foreach ($req->data as $item) {
			$oldCart = Session('cart')?Session('cart'):null;
			$newCart = new Cart($oldCart);
			$newCart->DeleteItemCart($item["key"],$item["value"]);
			if(count($newCart->products)>0){
				$req->Session()->put('cart',$newCart);
			}
			else{
				$req->Session()->forget('cart');
			}
		}

		return view('frontend.cart.list-cart');
	}
	
	
}

?>