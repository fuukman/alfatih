<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Http\Requests;

class DashboardSI extends Controller
{
    	public function index(){
	$transNotif = Transaction::where('notifTrans','0')
	->join('products','transactions.product_id','=','products.id')
	->get();
	
	$transBuk = Transaction::where('notifBukti','0')->where('bukti','!=','Belum Kirim bukti')
	->join('products','transactions.product_id','=','products.id')
	->get();

	$countTrans = Transaction::where('notifTrans','0')->count('notifTrans');
	
	$countBukti = Transaction::where('notifBukti','0')->where('bukti','!=','Belum Kirim bukti')->count('notifBukti');
	
	$countUser = User::count('id');
	
	$countUserUniver = User::where('confirmed','0')->count('id');
	
	$countTotalTrans = Transaction::count('id');
	
	$countProduct = Product::count('id');


    return view('backend.layouts.header')->with(compact('transNotif','countTrans','countBukti','countUser','countUserUniver','countTotalTrans','countProduct','transBuk'));					
    }
}
