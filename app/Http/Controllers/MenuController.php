<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home(){
        return view('beranda');
    }

    public function fsiswa(){
        return view('bsiswa');
    }

    public function infosiswa(){
        return view('info');
    }
}
