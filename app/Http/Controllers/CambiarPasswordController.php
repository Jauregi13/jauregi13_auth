<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class CambiarPasswordController extends Controller
{
    public function get()
    {
      return view('cambiarPassword');
    }

    public function update(Request $request)
    {
      $user = User::find(Auth::user()->id);
      $resultado = 0;
      if ($request->actual == Auth::user()->password) {
        $resultado = 1;
      }

      return view('cambiarPassword', ['resultado' => $resultado]);


    }
}
