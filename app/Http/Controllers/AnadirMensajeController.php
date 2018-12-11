<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnadirMensajeController extends Controller
{
    public function get()
    {
      return view('anadirMensaje');
    }
}
