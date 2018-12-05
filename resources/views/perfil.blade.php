@extends('layouts.mainud6')

@section('content')

<h2>Perfil</h2>

<form action="{{route('editar')}}" method="post">
@csrf
<label>Nombre:</label>
<br>
<input type="text" name="nombre" value="{{ Auth::user()->name }}">
<br>
<label>Email:</label>
<br>
<input type="email" name="email" value="{{ Auth::user()->email}}">
<br>
<input type="submit" name="enviar" value="Enviar">	
</form>






@endsection