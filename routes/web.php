<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\myc1;
Route::get('/', function () {
    return view('index');
});

Route::get('/ins', function () {
    return view('insert');
});

Route::get('/cart', function () {
    return view('shop');
});

Route::get('/cart1', function () {
    return view('shop1');
});


Route::post('hy',[myc1::class,'ins']);
Route::get("s",[myc1::class,'show']);
Route::get("delete/{id}",[myc1::class,'dell']);
Route::get('update/{id}',[myc1::class,'upshow']);
Route::post('down',[myc1::class,'update']);
Route::get('/',[myc1::class,'webshow']);
Route::get('cart/{id}',[myc1::class,'cart']);
Route::get('cart1/{id}',[myc1::class,'cart1']);
Route::get('search',[myc1::class,'search']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ins', [App\Http\Controllers\HomeController::class, 'index'])->name('insert');
