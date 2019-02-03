<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('admin');
  }
    public function index()
    {
      $users = User::where('role_id', 2)->count();

      return view('admin')->with('users',$users);
    }

    public function listarUsuarios()
    {
      $users = User::where('role_id', 2)->get();

      return view('listUsers')->with('users',$users);
    }

    public function eliminarUsuario($id)
    {
      $user = User::find($id);

      $user->delete();

      return back()->with('delete','El usuario '.$user->name. ' se ha eliminado correctamente');
    }
}
