<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoMostrarFicha extends Controller
{
    public function nomostrarficha() {

    return view('mensage');
}
}
