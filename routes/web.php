<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tcontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/HelloWorld', [Tcontroller::class,'index']);
Route::get('/HelloWorld/ambilFile', [Tcontroller::class,'ambilFile']);