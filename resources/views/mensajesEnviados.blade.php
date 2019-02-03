@extends('layouts.mainud6')

@section('content')

<div class="row">
  <div class="col-md-6">

    <h2 class="mt-3">Mensajes Enviados</h2>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Correo destinatario</th>
          <th scope="col">Asunto</th>
          <th scope="col">Mensaje</th>
          <th>Fecha</th>
          <th>Editar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($mensajes as $mensaje)
          <tr>
            <th scope="row">1</th>
            <td>{{$mensaje->email_recibido}}</td>
            <td>{{$mensaje->asunto}}</td>
            <td>{{$mensaje->mensaje}}</td>
            <td>{{$mensaje->created_at}}</td>
            <td><a href="{{route('mensajes.edit',$mensaje->id)}}" class="btn btn-warning"><span class="oi oi-pencil"></span></a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>

@endsection
