<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Article1Controller extends Controller
{
    //
    function articles($id){
        echo "Halaman Artikel dengan ID : $id";
    }
}
