<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    function index($program_name){
        echo "Daftar Program $program_name";
        echo "<ul>
                <li>Program 1</li>
                <li>Program 2</li>
                <li>Program 3</li>
             </ul>";
    }
}
