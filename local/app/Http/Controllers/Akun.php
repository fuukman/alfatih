<?php

namespace App\Http\Controllers;
use Image;
use Illuminate\Http\Request;
use DB, Mail;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Transaction;
use App\Product;
class Akun extends Controller
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
	

		$t = \App\User::all();
		$user =  \Auth::user()->id;
		$history = DB::table('users')
		->join('transactions', 'users.id','=','transactions.id_users')
		->join('products','transactions.product_id','=','products.id')
		->where('users.id', '=', $user)
		->select('transactions.id','transactions.ongkir','transactions.bukti','products.name as produkNama','formid','sku','qty','size','subtotal','transactions.status','users.name as userNama')
		->get();
// dd($history);
		return view('toko.akun')->with(compact('history','t','transaction','countTrans','countBukti','transBuk'));
	}
	public function delete($id){
		 $product_id = Transaction::find($id)->product_id;
		 $qty = Transaction::find($id)->qty;
		 $product = Product::find($product_id);
		 $stok = Product::find($product_id)->stok;
		 $product->stok = $qty+$stok;
		 $product->save();
		 
	
		$hapus = Transaction::where('id', $id)->delete();
		$t = \App\User::all();
		$user =  \Auth::user()->id;
		$history = DB::table('users')
		->join('transactions', 'users.id','=','transactions.id_users')
		->join('products','transactions.product_id','=','products.id')
		->where('users.id', '=', $user)
		->select('products.name as produkNama','transactions.ongkir','formid','sku','qty','size','subtotal','transactions.status','users.name as userNama')
		->get();

			return redirect()->back()->with('history', $history)
								->with('t', $t)->with('message','Pembelian berhasil dibatalkan');										
	}

	public function uploadBukti($invoice){
			$bukti = $invoice;


		return view('toko.uploadBukti')->with('bukti',$bukti);
	}

	public function postBukti(Request $request){
	
	if(Input::file())
        {
            $image = Input::file('img');
          	$filename  = time() . '.' . $image->getClientOriginalExtension();

             $path = ('images/bukti/' .$filename);
	
	   try 
    {
        $img =  Image::make($image->getRealPath())->resize(400, 600)->save($path);
    }
    catch(NotReadableException $e)
    {
    	$e = "file terlalu besar";
        // If error, stop and continue looping to next iteration
        return $e;
    }

                // $user->image = $filename;
                // $user->save();
	        // dd($path);
	        $transactions = Transaction::where('formid',$request->invoice)->get();
	        
	        foreach ($transactions as $trans) {
	        	// dd($trans);
	        	    $trans->bukti = $path;
	      			$trans->save();
	      			// dd($trans);
	        }
	      
	        return redirect()->back()->with('message','Bukti Berhasil diupload');;
           }
	}

	public function ubahStatus(Request $request){
		// return "Asdads";

		$transactions = Transaction::where('formid',$request->invoice)->get();
		// dd($transactions);
		foreach ($transactions as $trans) {
		$qq =	$trans->status = $request->status;
			$trans->save();
// dd($qq);
		}
		$data = ['prize' => 'Peke', 'total' => 3 ];
		Mail::send('auth.emails.ubahStatus',$data, function($m) {
		
            $m->from('admin@toko.com','Toko');
            $m->to(Input::get('email'),Input::get('nameUser'))
              ->subject('Status Pembelian');
        });

		$ubah = Transaction::where('formid',$request->invoice)->get();
		foreach ($ubah as $Ubah) {
			$Ubah->notifBukti = 1;
			$Ubah->save();
		}


	return \Redirect::to('/admin/report')->with('message','Data Berhasil ubah menjadi ' .$request->status);
	}
}