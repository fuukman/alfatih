<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
   protected $table = 'product_img';
    protected $fillable = ['id_product', 'img_name', 'path_thumb', 'path_full', 'primary'];

    public function product() {
        return $this->belongsTo('App\Product', 'id_product');
    }
}
