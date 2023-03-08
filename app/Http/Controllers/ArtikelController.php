<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    function index(){
        return view('artikel', [
            'artikel' => ArtikelModel::all()
        ]);
    }
}
