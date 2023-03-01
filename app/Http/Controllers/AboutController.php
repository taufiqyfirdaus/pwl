<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    function about(){
      return view('layouts.about', [
          'nim' => '2141720124',
          'nama' => 'Taufiqy Firdaus J',
          'kelas' => 'TI-2A'
      ]);
    }
}
