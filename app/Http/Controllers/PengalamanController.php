<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    //
    function index(){
        return view('layouts.pengalaman');
    }
}
