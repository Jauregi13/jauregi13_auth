

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary" id="mainNavbar">

    <a class="navbar-brand" href="#">USER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav mr-auto">
                <li id="initial" class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">
                        Inicio
                    </a>
                </li>
                <li id="initial" class="nav-item">
                    <a class="nav-link" href="{{route('mensajesRecibidos')}}">
                        Mensajes Recibidos <span class="badge badge-success">{{Session::get('mensajes')}}</span>
                    </a>
                </li>
                <li id="initial" class="nav-item">
                    <a class="nav-link" href="{{route('mensajesEnviados')}}">
                        Mensajes Enviados
                    </a>
                </li>
                <li id="initial" class="nav-item">
                    <a class="nav-link" href="{{route('mensajes.create')}}">
                        Enviar Mensaje
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-right">
                    <li class="nav-item dropdown active">
                      <a class="nav-link dropdown-toggle mr-5" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('perfil.edit',Auth::user()->id) }}">Perfil</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </div>
                    </li>
            </ul>
        </div>
    </div>
</nav>
