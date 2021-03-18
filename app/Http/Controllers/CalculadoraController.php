<?php

namespace App\http\Controllers;

use Illuminate\Http\Request;

class calculadoraController Extends Controller
{
    public function soma () {
        return view ('soma');
    }
}