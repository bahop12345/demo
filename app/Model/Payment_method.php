<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{
	public $timestamps = false;
    protected $table = "payment_method";
    protected $fillable = [
     'order_id', 'total_amount','payment_method',
    ];
    public function oder(){
        return $this->hasOne(Orders::class ,'id','order_id');
    }
}
