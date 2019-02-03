@extends('layouts.mainud6')

@section('content')

<div class="row">
  <div class="col-md-6">
    @if(Session::has('delete'))
    <div class="alert alert-danger mt-2" role="alert">{{Session::get('delete')}}</div>
    @endif
    <h2 class="mt-3">Listado de usuarios</h2>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th>Leido</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <th scope="row">1</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('eliminarUsuario',$user->id)}}" class="btn btn-danger">
                  <span class="oi oi-trash"></span>
                </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>

@endsection
