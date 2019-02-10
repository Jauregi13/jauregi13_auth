<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','user']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $mensajes = Message::where(['email_recibido' => $user->email,'leido' => false])
        ->orderBy('created_at','desc')
        ->count();
        $sesion = session()->put('mensajes',$mensajes);
        $cookie = cookie('prueba',$user->name,60);

        response('cookie')->withCookie($cookie);
        return view('home')->withCookie($cookie);
    }
}
