<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'id_cat', 'desc','sku','berat', 'price','stok'];

    public function transactions()
	{
		return $this->hasMany('App\Transaction');
	}
	
public function getPictures(){
	
	return $this->hasMany(Gambar::class,'id_product','id');
	
	}

public function getCat(){
		return $this->belongsTo('App\Category','id_cat');
	}
}
