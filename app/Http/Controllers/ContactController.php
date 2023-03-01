<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        return view('layouts.contact', [
            'message' => 'kontak berhasil'
        ]);
    }
    public function show(){
        return view('layouts.contact', [
            'message' => 'show kontak berhasil'
        ]);
    }
}
