@extends('layouts.mainud6')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido Administrador!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hay {{$users}} usuarios registrados en la plataforma
                    <br>
                    Hay {{$editores}} editor(es)
                    <br>
                    Hay {{$creadores}} creador(es)

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
