<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;	
use App\Http\Requests;
use Validator, Redirect, Session;
use App\User;
use Hash, Mail;
use App\Role;
class RegistrationController extends Controller
{
    public function postRegister()
    {
      $rules = [
          'name' => 'required|max:255',
          'email' => 'required|email|max:255|unique:users',
          'password' => 'required|confirmed|min:6',
        ];
 
        $input = Input::only(
            'name',
            'email',
            'password',
            'password_confirmation'
        );
 
        $validator = Validator::make($input, $rules);
 
        if($validator->fails())
        {
          return Redirect::to('register')->withInput()->withErrors($validator);
        }

        $confirmation_code = str_random(30);
 
        $user = User::create([
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'password' => Hash::make(Input::get('password')),
            'confirmation_code' => $confirmation_code
        ]);
        $memberRole = Role::where('name', 'member')->first();
        $user->attachRole($memberRole);
  
      Mail::send('auth.emails.verify', ['confirmation_code' => $confirmation_code], function($m) {
            $m->from('admin@toko.com', 'Toko');
            $m->to(Input::get('email'), Input::get('name'))
                ->subject('Konfirmasi alamat email anda');
        });
 
        Session::flash('message', 'Terima kasih telah mendaftar! Silahkan cek email anda untuk konfirmasi.');
 
        return Redirect::to('register');
    }

    public function confirm($confirmation_code)
    {
        if(!$confirmation_code)
        {
            return "link tidak terdaftar";
        }
 
        $user = User::where('confirmation_code', $confirmation_code)->first();
 
        if (!$user)
        {
            return "link tidak terdaftar";
        }
 
        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();
 
        Session::flash('message', 'Akun anda telah berhasil di verifikasi, silahkan login!');
 
        return Redirect::to('login');
    }
}
