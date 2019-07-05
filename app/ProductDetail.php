<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = ['product_id', 'color', 'ram', 'memory', 'display', 'camera', 'price', 'quantity'];

    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
