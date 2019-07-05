<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'producter_id', 'category_id'];

    public function orderDetails(){
    	return $this->hasMany('App\OrderDetail');
    }

    public function producter(){
    	return $this->belongsTo('App\Producter');
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function productDetails(){
    	return $this->hasMany('App\ProductDetail');
    }

    public function imgProducts(){
    	return $this->hasMany('App\ImgProduct');
    }
}
