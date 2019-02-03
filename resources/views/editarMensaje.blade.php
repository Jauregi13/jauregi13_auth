@extends('layouts.mainud6')

@section('content')

<div class="row">
  <div class="col-md-6">
    @if(Session::has('update'))
    <div class="alert alert-success mt-2" role="alert">{{Session::get('update')}}</div>
    @endif
    <h2 class="mt-2">Editar Mensaje</h2>
    <form action="{{route('mensajes.update',$mensaje->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label>Asunto</label>
        <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto" value="{{$mensaje->asunto}}">
      </div>
      @if ($errors->has('asunto'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('asunto') }}</strong>
          </span>
      @endif
      <div class="form-group">
        <label for="exampleTextarea">Mensaje</label>
        <textarea class="form-control" rows="3" name="mensaje">{{$mensaje->mensaje}}</textarea>
      </div>
      @if ($errors->has('mensaje'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('mensaje') }}</strong>
          </span>
      @endif
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

</div>

@endsection
