<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registerform;

class RegistrationController extends Controller
{
   public function index()
   {
    return View("form");
   }

   public function formValidation(Request $request)
   {    
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmatio' => 'required|same:password'
        ]);


        Registerform::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password')

        ]);
        return redirect('/form');
        // $register = new Registerform();
        // dd(request('password'));
        // echo '<pre>';
        // print_r($request->all());
        // $register->name = request('name');
        // $register->email = request('email');
        // $register->password = request('password');
        // dd($register);        
   } 

   public function formData(Request $request)
   {
    echo '<pre>';
    print_r($request->all());
   }
}
