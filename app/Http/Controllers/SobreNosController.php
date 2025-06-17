<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobreNos()
    {
        return view('site.sobre-nos'); // site = pasta, sobre-nos = arquivo
    }
}
