<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use File;
use App\Gambar;
use Image;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Transaction;
use App\Product;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Method delete file image
     * @param   $id 
     * @return action
     */
    public function deleteFile($id)
    {
        $product = Product::find($id);
        // hapus image lama, jika ada
        if ($product->image) {
            $old_cover = $product->image;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
            . DIRECTORY_SEPARATOR . $product->image;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
            }
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
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


        $image=\App\Gambar::all();
        $product = Product::orderBy('id','desc')
        ->paginate(9);

        return view('products.index')->with(compact('product','transaction','transBuk','countTrans','countBukti','image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
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

        $kategori = \App\Category::all();
        return view('products._form')->with(compact('kategori','transaction','transBuk','countTrans','countBukti'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {

        $thumb = ('images/products/thumb');
        $full = ('images/products/full');

        $product = Product::create($request->except('image'));
        // return $product; 
            $pro_id = $product->id;
            $product->save();
                
            if ($request->hasFile('image')) {
                $images = $request->file('image');
                foreach ($images as $image) {
                    $name = str_random(5) . '.' . $image->getClientOriginalExtension();
                    $img = new Gambar();
                    $img->img_name = $name;
                    $img->id_product = $pro_id;
                    $img->path_thumb = 'images/products/thumb/' . $name;
                    $img->path_full = 'images/products/full/' . $name;
                    $img->save();
                    Image::make($image)->save($full . '/' . $name);
                    Image::make($image)->resize('100', '100')->save($thumb . '/' . $name);
                }
                 
            }
        

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $product->name"
            ]);
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //metod untuk delete gan, karna yg destroy gk bisa soalnya pake metode delete dan ini metod get jadi bisa
    public function show($id)
    {
        db::table('product_img')
                                ->where('id_product', $id)
                                ->delete();
        db::table('products')
                            ->where('id', $id)
                            ->delete();

      
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Produk berhasil dihapus."
        ]);

        return redirect()->route('admin.products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
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

        $kategori = \App\Category::all();
        $product = Product::find($id);
        return view('products._edit')->with(compact('product','kategori','transaction','transBuk','countTrans','countBukti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::find($id);
        

        $thumb = ('images/products/thumb');
        $full = ('images/products/full');

        $product->update($request->except('image'));

            $pro_id = $product->id;
            $product->save();
            if ($request->hasFile('image')) {
                $images = $request->file('image');
        db::table('product_img')
                                ->where('id_product', $id)
                                ->delete();
        db::table('transactions') 
                                ->where('product_id', $id)
                                ->delete();
                foreach ($images as $image) {
                    $name = str_random(5) . '.' . $image->getClientOriginalExtension();
                    $img = new Gambar();
                    $img->img_name = $name;
                    $img->id_product = $pro_id;
                    $img->path_thumb = 'images/products/thumb/' . $name;
                    $img->path_full = 'images/products/full/' . $name;
                    $img->save();
                    Image::make($image)->save($full . '/' . $name);
                    Image::make($image)->resize('100', '100')->save($thumb . '/' . $name);
                }
                 
            }


        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $product->name"
            ]);
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //ini gk berfungsi gan diganti show deletenya
    public function destroy($id)
    {
 
        db::table('product_img')
                                ->where('id_product', $id)
                                ->delete();
        db::table('products')
                            ->where('id', $id)
                            ->delete();

      
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Produk berhasil dihapus."
        ]);

        return redirect()->route('admin.products.index');
    }

   
}
