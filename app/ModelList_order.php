<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelList_order extends Model
{
    protected $table = "orders";
    protected $primaryKey = 'Id';
    protected $guard = [];
}
