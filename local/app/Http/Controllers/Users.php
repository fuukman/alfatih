<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Transaction;

class Users extends Controller
{
    public function listUsers(){
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
	

    	$user = User::orderBy('id','desc')
    	->paginate(10);

    	return view('toko.listuser')->with(compact('transaction','transBuk','countTrans','countBukti','user'));
    }
}
