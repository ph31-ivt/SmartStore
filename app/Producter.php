<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producter extends Model
{
    protected $fillable = ['name'];

    public function products(){
    	return $this->hasMany('App\Product');
    }
}
