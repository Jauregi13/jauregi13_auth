@extends('layouts.mainud6')

@section('content')

<h2>Cambiar Contraseña</h2>

<form  action="cambiarPass" method="post">
  @csrf
  <label>Contraseña actual:</label>
  <br>
  <input type="password" name="actual">
  <br>
  <label>Nueva contraseña:</label>
  <br>
  <input type="password" name="nueva">
  <br>
  <label>Confirmar contraseña:</label>
  <br>
  <input type="password" name="confirmación">
  <br><br>
  <input type="submit" name="enviar" value="Enviar">
</form>
@if(isset($_POST['enviar']))
  {{$resultado}}
@endif




@endsection
