<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    function articles($id){
        echo "Halaman Artikel dengan ID : $id";
    }
}
