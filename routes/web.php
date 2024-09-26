<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function (){
    //return 'Hello all...';
    //return '<h1> Hello all....  </h1>';
    return 5+7;
});

Route::get('/user/{id}', function ($id){
    return 'Welcome user: ' . $id;
});

Route::get('/calculate/{num1}/{num2}', function ($a,$b){
    return 'Result: ' .($a+$b);     
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/admin', function (){
    return view('admin.index');
});

Route::resource('reports',
ReportController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
