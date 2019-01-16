<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class MensajesController extends Controller
{
    public function get()
    {
      clock(User::first());
      return view('mensajes');
    }
}
