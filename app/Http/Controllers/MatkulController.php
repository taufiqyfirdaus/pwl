<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    function index(){
        return view('matkul', [
            'matkul' => MatkulModel::all()
        ]);
    }
}
