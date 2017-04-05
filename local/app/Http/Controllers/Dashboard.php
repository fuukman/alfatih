<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\User;
use App\Product;
use App\Http\Requests;
use DB;
class Dashboard extends Controller
{
	public function index(){

	$transaction = Transaction::where('notifTrans','0')
	->join('products','transactions.product_id','=','products.id')
	->orderBy('transactions.id', 'desc')
	->get();
	
	$transBuk = Transaction::where('notifBukti','0')->where('bukti','!=','Belum Kirim bukti')
	->join('products','transactions.product_id','=','products.id')
	->orderBy('transactions.id', 'desc')
	->get();

	$countTrans = Transaction::where('notifTrans','0')->count('notifTrans');
	
	$countBukti = Transaction::where('notifBukti','0')->where('bukti','!=','Belum Kirim bukti')->count('notifBukti');
	

	$countUser = User::count('id');
	
	$countUserUniver = User::where('confirmed','0')->count('id');
	
	$countTotalTrans = Transaction::count('id');
	
	$countProduct = Product::count('id');

	$stok = Product::all();

	$laris = Transaction::orderBy('product_id')
	->join('products','transactions.product_id','=','products.id')
	->limit(3)->select('name',DB::raw('count(product_id) as jumlah '))
	->groupBy('product_id')
	->get();

	$lates = User::orderBy('id','desc')->limit(8)->get();	

    return view('toko.dashboard')->with(compact('lates','laris','stok','transaction','countTrans','countBukti','countUser','countUserUniver','countTotalTrans','countProduct','transBuk'));							  
    }

    public function markAll(){
    	$ubah = Transaction::where('notifTrans','0')->get();
    	foreach ($ubah as $Ubah) {
    	$Ubah->notifTrans= 1;
    	$Ubah->save();
    	}
    	
    	return redirect()->back();
    }
}
