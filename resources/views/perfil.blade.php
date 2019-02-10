@extends('layouts.mainud6')

@section('content')

<div class="row">
  <div class="col-md-6">
    @if(Session::has('update'))
    <div class="alert alert-success mt-2" role="alert">{{Session::get('update')}}</div>
    @endif
    <h2 class="mt-2">Editar Perfil</h2>
    <form action="{{route('perfil.update',Auth::user()->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombre"  value="{{Auth::user()->name}}">
      </div>
      <div class="form-group">
        <label for="exampleTextarea">Email</label>
        <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}">
      </div>
      <div class="form-group">
        <label>Roles</label>
        <textarea name="roles" rows="3" class="form-control" disabled>
          @foreach($roles as $rol)
            {{$rol->name}}
          @endforeach
        </textarea>
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>

</div>





@endsection
