<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use RajaOngkir;
class Tes extends Controller
{
   public function index(){

$ok=base64_encode(time());

$oke=base64_decode($ok);

var_dump(time());
var_dump($ok);
var_dump($oke);
 

 


}
}



