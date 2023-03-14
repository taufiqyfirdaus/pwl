<?php

namespace App\Http\Controllers;

use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    function index(){
        return view('hobi', [
            'hobi' => HobiModel::all()
        ]);
    }
}
