<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class Testcontroller extends Controller
{
// public function __construct()
// {
//     $this->middleware('auth');
// }

  public function foo(){

//     if(!Gate::allows('access-admin')){
//       abort('403');
//     };
  
// return view('test.foo');
return('foo');
  }  

  public function bar(){
  

    // return view('test.bar'); 
return('bar');
}
}