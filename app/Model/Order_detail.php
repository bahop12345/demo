<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
	public $timestamps = false;
	protected $table = "order_detail";
	protected $fillable = [
     'order_id', 'product_id','payment_id', 'quantity','price',
    ];
	
}