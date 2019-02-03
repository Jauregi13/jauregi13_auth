@extends('layouts.mainud6')

@section('content')

<div class="row">
  <div class="col-md-6">
    @if(Session::has('confirmation'))
    <div class="alert alert-success mt-2" role="alert">{{Session::get('confirmation')}}</div>
    @endif
    @if(Session::has('delete'))
    <div class="alert alert-danger mt-2" role="alert">{{Session::get('delete')}}</div>
    @endif
    <h2 class="mt-3">Mensajes Recibidos</h2>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Correo destinatario</th>
          <th scope="col">Asunto</th>
          <th scope="col">Mensaje</th>
          <th>Fecha</th>
          <th>Leido</th>
        </tr>
      </thead>
      <tbody>
        @foreach($mensajes as $mensaje)
          <tr>
            <th scope="row">1</th>
            <td>{{$mensaje->user->email}}</td>
            <td>{{$mensaje->asunto}}</td>
            <td>{{$mensaje->mensaje}}</td>
            <td>{{$mensaje->created_at}}</td>
            @if($mensaje->leido)
              <td><button type="button" class="btn btn-success"><span class="oi oi-check"></span></button></td>
              <td>
                <a href="{{route('mensajes.destroy',$mensaje->id)}}" class="btn btn-danger"
                  onclick="event.preventDefault();
                                document.getElementById('eliminar').submit();">
                  <span class="oi oi-trash"></span>
                </a>
                <form id="eliminar" action="{{ route('mensajes.destroy',$mensaje->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
              </td>
            @else
              <td>
                <a href="{{route('leerMensaje',$mensaje->id)}}"class="btn btn-info">
                  <span class="oi oi-eye"></span>
                </a>
              </td>
            @endif
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>

@endsection
