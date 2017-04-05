<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Admin extends Controller
{
    public function index()
    {
        return view('backend.layouts.index');
    }
    public function tambah(){
    	return view('backend.product.create');
    }
}
