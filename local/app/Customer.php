<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','id_users', 'phone', 'address', 'province', 'postal_code', 'formid'];

    public function user() {
        return $this->belongsTo('App\User', 'id_users');
    }
}
