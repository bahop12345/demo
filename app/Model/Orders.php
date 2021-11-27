<?php

namespace App\Model;

use DB;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
	public $timestamps = false;
    protected $table = "orders";
    protected $fillable = [
     'user_id', 'name','Country', 'city','district', 'commune','email', 'phone','note',
    ];
    public function payment(){
        return $this->hasMany(Orders::class ,'order_id','id');
    }

    public function scopeOrders($query){
        $query =  DB::table('orders')
        ->LeftJoin('payment_method', 'orders.payment_id','=','payment_method.id')
        ->select('orders.id','payment_method.payment_method','orders.name','orders.commune','orders.phone','orders.total_price','orders.district','orders.city')->paginate(5);

        return $query;
    }

}
