<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB, Mail;
use App\Http\Requests\SaveCustomerRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Transaction;
use App\Customer;
use Redirect;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Input;
use Gloudemans\Shoppingcart\Facades\Cart;
use RajaOngkir;
use PDF;

class TokoController extends Controller
{

    public function index() {

		$kategori = \App\Category::all();
    	 $image=\App\Gambar::all();
    	 $product = DB::table('products')     
            ->join('product_img', 'products.id', '=', 'product_img.id_product')
            ->select('product_img.img_name', 'products.id','name','price')
            ->orderBy('products.id', 'desc')
            ->groupBy('id_product')
            ->paginate(9);
        
        return view('toko.productlist')->with(compact('product','image','kategori'));										
										
	}


	public function showItem($id) {
	
		$kategori = \App\Category::all();		
		$db = Product::find($id);

		return view('toko.detail')->with(['product'=>$db])
								->with('kategori', $kategori);
								

		}

	public function tambahItem(Request $request) {
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



		$pilih = 0;
		$kategori = \App\Category::all();	
		$ongkir = RajaOngkir::kota()->all();
		$product = Product::find($request->id);

		$id          = $product->id;
		$name        = $product->name;
		$qty         = $request->quantity;
		$price       = $product->price;
		$size		 = $request->size;
		$stok		 = $product->stok;
		$berat		 = $product->berat;

		$data = ['id'         => $id, 
				'name'        => $name, 
				'qty'         => $qty, 
				'price'       => $price,
				'size'        => $size,
				'berat'		  => $berat,
				'options'     => [$size]
				];
		
		Cart::add($data);
		$cart_content = Cart::content(1);

		
		return view('toko.productcart')->with(compact('cart_content','kategori','ongkir','pilih','transaction','transBuk','countTrans','countBukti'));
	}

	public function showCart() {
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



		$pilih = 0;
		$ongkir = RajaOngkir::kota()->all();
		$cart_content = Cart::content(1);
		
		return view('toko.productcart')->with(compact('cart_content','ongkir','pilih','transaction','transBuk','countTrans','countBukti'));
	}

	public function cekongkir(Request $request){
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



		$cekongkir = RajaOngkir::Cost([
    	'origin'        => 501, // id kota asal
    	'destination'   => $request->kota_asal, // id kota tujuan
    	'weight'        => $request->berat, // berat satuan gram
    	'courier'       => $request->courier, // kode kurir pengantar ( jne / tiki / pos )
		])->get();
			 // return $cekongkir;
			 return view('toko.tarif')->with(compact('cekongkir','transaction','transBuk','countTrans','countBukti'));
		 	// return Redirect()->back()->with(compact('cekongkir','cart_content','ongkir'));
	}

	public function pilihOnkir(Request $request){
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



			$pilih = $request->tarif;

			$ongkir = RajaOngkir::kota()->all();
			$cart_content = Cart::content(1);
		
		return view('toko.productcart')->with(compact('pilih','cart_content','ongkir','transaction','transBuk','countTrans','countBukti'));
	}

	public function simpanOngkir(Request $request){
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


		$pilih = $request->ongkir;
		$formid       = base64_encode(time());
		if (Auth::guest()){	
				return view('toko.customer');
		}else {
			$id =  \Auth::user()->id;
			$name =  \Auth::user()->name;
			$email =  \Auth::user()->email;
		}
	

		$cekCus = Customer::where('id_users',\Auth::user()->id)->first(); 
		if ($cekCus) {
			$phone = $cekCus->phone;
			$address = $cekCus->address;
			$province = $cekCus->province;
			$postal_code = $cekCus->postal_code;
			}
		else {
			$phone = $cekCus = null;
			$address = $cekCus = null;
			$province = $cekCus = null;
			$postal_code = $cekCus = null;
}
	

		return view('toko.customer')->with(compact('phone','address','province','postal_code','pilih','formid','id','name','email','transaction','transBuk','countTrans','countBukti'));
	}

	public function hapusItem($id) {
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


		Cart::remove($id);
		$cart_content = Cart::content(1);

		if (Cart::count() == 0) {
		 	return Redirect::to('/')->with('message', 'Batal Transaksi');
		 }
		else {
			return Redirect()->back()->with(compact('cart_content','transaction','transBuk','countTrans','countBukti'));
		}
	}

	public function checkout() {
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


		
		$formid       = base64_encode(time());
		if (Auth::guest()){	
				return view('toko.customer');
		}else {
			$id =  \Auth::user()->id;
			$name =  \Auth::user()->name;
			$email =  \Auth::user()->email;
		}

		// Cart::destroy();

		return view('toko.customer')->with(compact('formid','id','name','email','transaction','transBuk','countTrans','countBukti'));

	}

	public function saveCustomer(SaveCustomerRequest $request) {
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



		  $formid = $request->only('formid');

		$cart_content = Cart::content(1);
		if (\Entrust::hasRole('member')) {
			$subtotal	  = 'Rp '.Cart::subtotal(2, ',', '.');
		} else {
			$subtotal	  = 'Rp '.Cart::total(2, ',', '.');
		}

		
		if (Auth::guest()){	
				return view('toko.customer');
		}else {
			$user =  \Auth::user()->id;
		}
		// dd($cart_content);
		foreach ($cart_content as $cart) {
			$transaction  = new Transaction();

			$product = Product::find($cart->id);
			$stok = Product::all();
			foreach ($formid as $kode) {
				$kode;

			}

			$transaction->ongkir 	  = $request->ongkir;
			$transaction->product_id  = $cart->id;
			$transaction->id_users 	  = $user;
			$transaction->formid      = $kode;
			$transaction->tanggal     = date('Y-m-d');
	 $qty = $transaction->qty         = $cart->qty;
			$transaction->size  	  = $cart->size;
			$transaction->total_price = $cart->price * $cart->qty;
			$transaction->status      = 'Belum Terbayar';
			$transaction->subtotal 	  = $subtotal;
	
		$sisa = $product->stok;
		$product->stok = $sisa-$qty;
		$product->save();
		$transaction->save();
	}
		Cart::destroy();

	 	//Customer::create($request->all());
	 
	 	$cus = new Customer;
        $cus->id_users = $request ->get('id');  
    	$cus->name = $request ->get('name');
        $cus ->phone = $request ->get('phone');
    	$cus->province = $request ->get('province'); 
    	$cus->address = $request ->get('address'); 
    	$cus->postal_code = $request ->get('postal_code'); 
    	$cus->formid = $request ->get('formid'); 
    	$cus->save();

	    $notrans = Transaction::where('formid', '=', $formid )->first();

		$transaction = Transaction::whereHas('product', function($q) {
			  $formid = Input::get('formid');
	  		  $q->where('formid', '=', $formid);
			})->get();

		// $formid = $request->only('formid');
		
		$customer = Customer::where('formid', '=', $formid )->first();

		// kirim email ke customer

		$notrans = Transaction::where('formid', '=', $request ->get('formid') )->first();
		$transaction = Transaction::where('formid', '=', $request ->get('formid'))->get();
		$customer = Customer::where('formid', '=', $request ->get('formid'))->first();
		$pdf = PDF::LoadView('toko.pdf', compact('notrans','customer','transaction'));
		
		$pdf->download('invoice_belisob.pdf');	

        Mail::send('toko.pdf', ['pdf' => $pdf, 'notrans' => $notrans, 'transaction' => $transaction, 'customer' => $customer], function($m) {
		
            $m->from('admin@toko.com', 'Toko');
            $m->to(Input::get('email'),Input::get('nameUser'))
                ->subject('Invoice Pembelian');
        });


		Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Terima kasih telah berbelanja. Silakan kirim uang sesuai invoice, kami akan mengkonfirmasi dan memproses pengiriman."
        ]);
		return view('toko.invoice', compact('notrans', 'transaction', 'customer','transaction','transBuk','countTrans','countBukti'));
	}



	public function viewInvoice($formid) {
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

		if(\Entrust::hasRole('admin')){

		$ubah = Transaction::where('formid', '=', $formid )->first();
		$ubah->notifTrans = 1;
		$ubah->save();
		}

		
		$notrans = Transaction::where('formid', '=', $formid )->first();
		
		$transactions = Transaction::where('formid', '=', $formid)->get();
		
		$customer = Customer::where('formid', '=', $formid)->first();
		
		 return view('toko.invoice', compact('notrans', 'transactions', 'customer','transaction','transBuk','countTrans','countBukti'));
	}

	
	public function downloadInvoice($formid) {

		$notrans = Transaction::where('formid', '=', $formid )->first();
		// return $notrans;
		
		$transaction = Transaction::where('formid', '=', $formid)->get();
		
		$customer = Customer::where('formid', '=', $formid)->first();

		$pdf = PDF::LoadView('toko.pdf', compact('notrans','customer','transaction'));
		
		// return print_r($)
		 // return $pdf;
		 // dd($pdf);

		return $pdf->download('invoice_belisob.pdf');	
		
		 // return view('toko.pdf', compact('notrans', 'transaction', 'customer'));
	}
		//pencarian product
	    public function search(Request $request){
	    $kategori = \App\Category::all();
    	$image=\App\Gambar::all();
        $query = $request->get('cari');
        $product = DB::table('products')     
            ->join('product_img', 'products.id', '=', 'product_img.id_product')
            ->select('product_img.img_name','products.id','name','price')
            ->orderBy('products.id', 'desc')
            ->groupBy('id_product')
            ->where('products.name', 'like' ,'%' . $query . '%')
            ->paginate(9);

        return view('toko.productlist', compact('product', 'query','kategori','image'));
    }

    //menampilkan kategori
    public function showKategori($id){

    	$kategori = \App\Category::all();
    	 
    	 $product = DB::table('products')     
            ->join('product_img', 'products.id', '=', 'product_img.id_product')
            ->select('product_img.img_name','products.id','name','price')
            ->orderBy('products.id', 'desc')
            ->groupBy('id_product')
            ->where('products.id_cat','=', $id)
            ->paginate(9);

        return view('toko.productlist')->with(compact('product','kategori','id'));
    }

}
