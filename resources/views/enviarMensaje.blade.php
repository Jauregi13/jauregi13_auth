@extends('layouts.mainud6')

@section('content')

<div class="row">
  <div class="col-md-6">
    @if(Session::has('confirmation'))
    <div class="alert alert-success mt-2" role="alert">{{Session::get('confirmation')}}</div>
    @endif
    <h2 class="mt-2">Enviar Mensaje</h2>
    <form action="{{route('mensajes.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Correo electronico del destinatario</label>
        <input type="email" class="form-control {{ $errors->has('email_destin') ? ' is-invalid' : '' }}" id="email_destin" name="email_destin" placeholder="Introduce el email">
      </div>
      @if ($errors->has('email_destin'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email_destin') }}</strong>
          </span>
      @endif
      <div class="form-group">
        <label for="exampleInputPassword1">Asunto</label>
        <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto">
      </div>
      @if ($errors->has('asunto'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('asunto') }}</strong>
          </span>
      @endif
      <div class="form-group">
        <label for="exampleTextarea">Mensaje</label>
        <textarea class="form-control" rows="3" name="mensaje"></textarea>
      </div>
      @if ($errors->has('mensaje'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('mensaje') }}</strong>
          </span>
      @endif
      <div class="form-group">
        <label for="exampleInputFile">Subir imagen</label>
        <input type="file" class="form-control-file" name="imagen">
      </div>
      @if ($errors->has('imagen'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('imagen') }}</strong>
          </span>
      @endif
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

</div>

@endsection
