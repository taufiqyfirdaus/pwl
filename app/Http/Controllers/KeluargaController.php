<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    function index(){
        return view('keluarga', [
            'keluarga' => KeluargaModel::all()
        ]);
    }
}
