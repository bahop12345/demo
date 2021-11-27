<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCategory extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'name',
    ];
    public $timestamps = false;
    public function product(){
    	return $this->hasMany(ModelProduct::class,'category_id','id');
    }
}
