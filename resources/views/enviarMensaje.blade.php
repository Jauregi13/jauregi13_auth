@extends('layouts.mainud6')

@section('content')

<div class="row">
  <div class="col-md-6">
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
      <div class="form-group">
        <label for="exampleTextarea">Mensaje</label>
        <textarea class="form-control" id="exampleTextarea" rows="3" name="mensaje"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Subir imagen</label>
        <input type="file" class="form-control-file" id="exampleInputFile" name="imagen">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

</div>

@endsection
