<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(){
        return view ('layouts.product', [
            'judul' => 'Product List',
            'product' => ['air', 'tissue']
        ]);
    }
    function air(){
        return view ('layouts.product', [
            'judul' => 'Product Air',
            'product' => ['aqua', 'cleo', 'club']
        ]);
    }
    function tissue(){
        return view ('layouts.product', [
            'judul' => 'Product Tissue',
            'product' => ['multi', 'paseo', 'nice']
        ]);
    }
}
