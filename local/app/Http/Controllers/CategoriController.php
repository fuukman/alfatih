<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Transaction;     
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class CategoriController extends Controller
{
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

        $category = Category::paginate(9);

        return view('categori.index')->with(compact('category','transaction','transBuk','countTrans','countBukti'));
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
        
        return view('categori.create')->with(compact('category','transaction','transBuk','countTrans','countBukti'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $category = Category::create($request->all());
        $category->save();

         Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $category->name"
            ]);
        return redirect()->route('admin.categori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        $category = Category::find($id);

        return view('categori.edit')->with(compact('category','transaction','transBuk','countTrans','countBukti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $category = Category::find($id);
        $category->update($request->all());
        $category->save();


         Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $category->name"
            ]);
        return redirect()->route('admin.categori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
