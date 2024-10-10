<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tcontroller extends Controller

 {
    Public function index()
    {
        return "Selamat Belajar Framework Laravel.11";
    }

    Public function ambilFile()
    {
        return view('ambilFile');
    }
 } 

