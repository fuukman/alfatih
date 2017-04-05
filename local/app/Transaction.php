<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['product_id','id_users', 'formid', 'qty', 'total_price', 'status'];

    public function product()
	{
		return $this->belongsTo('App\Product');
	}
	public function users()
	{
		return $this->belongsTo('App\User', 'id');
	}

}
