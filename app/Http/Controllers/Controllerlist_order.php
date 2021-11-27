<?php

namespace App\Http\Controllers;
use App\ModelList_order;
use App\Model\Orders;
use App\Model\Payment_method;
use App\Model\Order_detail;
use Illuminate\Http\Request;
use DB;

class Controllerlist_order extends Controller
{
    public function list_order(){
        $transactions = Orders::orders();
        return view("Admin/order/list_order",compact('transactions'));
    }

    // xóa đơn hàng
    public function remove_order($id){
        Order_detail::where('order_id',$id)->delete();
        Ordersrders::where('id',$id)->delete();
        return redirect()->back();
    }
    // chi tiết đơn hàng
    public function order_detail($id){
     $transactions = Order_detail::where('order_id',$id)
     ->join('product','product.id','=','order_detail.product_id')
     ->select('product.image','order_detail.quantity','order_detail.price','product.pro_name','product.id')->get();
     return view("Admin/order/order_detail",['transactions'=> $transactions]);
 }
}
