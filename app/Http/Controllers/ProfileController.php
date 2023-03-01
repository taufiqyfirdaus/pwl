<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function index(){
        return view('layouts.profile', [
            'nama' => 'Taufiqy Firdaus Jatu',
            'nim' => '2141720124',
            'kelas' => 'TI-2A',
            'absen' => '28'
        ]);
    }
}
