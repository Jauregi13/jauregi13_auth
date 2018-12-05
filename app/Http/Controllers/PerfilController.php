<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class PerfilController extends Controller
{
    public function get()
    {
    	return view('perfil');
    }

    public function editar(Request $request)
    {
    	$user = User::find(Auth::user())
    }
}
