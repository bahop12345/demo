<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    public function cat(){
    	return $this->hasOne(Category::class,'id','category_id');
    }
    public function comme(){
    	return $this->hasMany(Comment::class,'id','product_id');
    }
}
