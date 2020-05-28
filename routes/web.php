<?php 
use illuminate\support\facades\Route;
Route::get('/', function(){
    return view('welcome');
});


Route::get('/register','homecontroller@home');
Route::get('/register','homecontroller@register');
Route::post('/register', 'homecontroller@register2');