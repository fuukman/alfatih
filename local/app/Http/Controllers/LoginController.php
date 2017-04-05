<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;	
use Illuminate\Http\Request;
use Session, Validator, Redirect;
use Auth;
use App\Http\Requests;

class LoginController extends Controller
{
    public function postLogin()
  {
    $rules = [
          'email' => 'required|exists:users',
          'password' => 'required'
      ];
 
      $input = Input::only('email', 'password');
 
      $validator = Validator::make($input, $rules);
 
      if($validator->fails())
      {
          return Redirect::to('login')->withInput()->withErrors($validator);
      }
 
      $credentials = [
          'email' => Input::get('email'),
          'password' => Input::get('password'),
          'confirmed' => 1
      ];
 
      if ( ! Auth::attempt($credentials))
      {
        Session::flash('alert-class', 'alert-danger');
        Session::flash('message', 'Email belum di konfirmasi, Silahkan cek email anda!');
        return Redirect::to('login');
      }
      if (\Entrust::hasRole('admin')){
        return Redirect::to('/admin/dashboard');  
      }
      return Redirect::to('/');
  }
}
