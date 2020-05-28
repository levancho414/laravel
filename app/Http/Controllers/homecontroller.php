<?php
namespace App\http\controllers;
use illuminate\Http\Request;
use App\registracia;
class homecontroller extends controller
{
  
public function register(){
    return view('register');
}

public function register2(Request $request){
registracia::create([
    'name' => $request->get('name'),
    'surname' => $request->get('surname'),
    'email' => $request->get('email'),
    'password' => bcrypt($request->get('password'))
    ]);
}
}