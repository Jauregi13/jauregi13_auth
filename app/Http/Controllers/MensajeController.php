<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMensajeRequest;
use App\Message;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth','user']);
    }
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enviarMensaje');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMensajeRequest $request)
    {
        $mensaje = new Message;
        $mensaje->asunto = $request->asunto;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->user_id = Auth::user()->id;
        $mensaje->email_recibido = $request->email_destin;
        $mensaje->leido = false;

        $mensaje->save();

        return back()->with('confirmation','Mensaje enviado correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function mensajesEnviados()
    {
      $user = Auth::user();

      $mensajes = Message::where('user_id',$user->id)
      ->orderBy('created_at','desc')
      ->get();

      return view('mensajesEnviados')->with('mensajes',$mensajes);

    }

    public function mensajesRecibidos()
    {
      $user = Auth::user();
      $mensajes = Message::where('email_recibido',$user->email)
      ->orderBy('created_at','desc')
      ->get();

      return view('mensajesRecibidos')->with('mensajes',$mensajes);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mensaje = Message::find($id);

        return view('editarMensaje')->with('mensaje',$mensaje);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $mensaje = Message::find($id);

      $mensaje->asunto = $request->asunto;

      $mensaje->mensaje = $request->mensaje;

      $mensaje->save();

      return back()->with('update','Mensaje editado correctamente');

    }

    public function leerMensaje($id)
    {
      $mensaje = Message::find($id);

      $mensaje->leido = true;

      $mensaje->save();

      $user = Auth::user();

      $mensajesNoLeidos = Message::where(['email_recibido' => $user->email,'leido' => false])
      ->orderBy('created_at','desc')
      ->count();

      session(['mensajes' => $mensajesNoLeidos]);

      return back()->with('confirmation','Has leido el mensaje de '.$mensaje->user->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $mensaje = Message::find($id);

      $mensaje->delete();

      return back()->with('delete','Mensaje eliminado correctamente');
    }
}
