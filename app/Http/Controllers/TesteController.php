<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
       // echo "Parametro 01: ".$p1."<br> Parametro 02: ".$p2;
        return view('site.teste');
    }
}
