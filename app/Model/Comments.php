<?php

namespace App\model;
use App\User;
use App\Model\product;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
     protected $table = 'comments';
     protected $fillable = [
        'product_id','user_id','content',
    ];
    public $timestamps = true;
    public function user(){
    	return $this->hasOne(User::class,'id','user_id');
    }
    public function prod(){
    	return $this->hasOne(Product::class,'id','product_id');
    }

}
