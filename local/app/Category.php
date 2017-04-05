<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['name','status'];

    public function produk(){

    return $this->hasMany(Product::class,'id','id_cat');
    }
}
