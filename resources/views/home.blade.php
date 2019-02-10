@extends('layouts.mainud6')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido {{Auth::user()->name}}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Aquí podrás chatear con cualquier persona de la plataforma

                    {{Cookie::get('prueba')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
