<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImgProduct extends Model
{
    protected $fillable = ['product_id', 'img_url'];

    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
