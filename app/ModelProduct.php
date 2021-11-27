<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
     protected $table = 'product';
     protected $fillable = [
        'category_id','pro_name','image','price','content','desscription'
    ];
    public $timestamps = true;
     public function cat(){
    	return $this->hasOne(Category::class,'id','category_id');
    }
}
