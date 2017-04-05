<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use App\Transaction;

class ReportController extends Controller
{
	public function index() {
		
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

		return view('report.index')->with(compact('transaction','transBuk','countTrans','countBukti'));
	}

	public function getPeriode(Request $request) {
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


		$this->validate($request, [
			'begin' => 'required',
			'end' => 'required',
		]);

		$from = date('Y-m-d', strtotime(Input::get('begin')));
		$to = date('Y-m-d', strtotime(Input::get('end')));

		$transactions = Transaction::whereHas('product', function($q) {
			$from = date('Y-m-d', strtotime(Input::get('begin')));
			$to = date('Y-m-d', strtotime(Input::get('end')));

			$q->whereBetween('tanggal', [$from,$to]);
		})
		->get();
	

		return view('report.getPeriode', compact('transactions', 'from', 'to','user','transaction','transBuk','countTrans','countBukti'));
	}
}
