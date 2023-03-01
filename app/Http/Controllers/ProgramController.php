<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    function index(){
        return view ('layouts.program', [
            'judul' => 'Program List',
            'program' => ['sekolah', 'kantor']
        ]);
    }
    function sekolah(){
        return view ('layouts.program', [
            'judul' => 'Program Sekolah',
            'program' => ['akademik', 'ekstrakulikuler', 'magang']
        ]);
    }
    function kantor(){
        return view ('layouts.program', [
            'judul' => 'Program Kantor',
            'program' => ['pelatihan', 'pengembangan karir', 'keseimbangan kerja']
        ]);
    }
}
