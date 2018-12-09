<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function get()
    {
    	return view('perfil');
    }

    public function editar(Request $request)
    {
    	$user = User::find(Auth::user()->id);

      $user->name = $request->nombre;
      $user->email = $request->email;

      $user->save();
    }
}
