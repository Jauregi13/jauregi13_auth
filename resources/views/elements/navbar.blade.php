

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary" id="mainNavbar">

    <a class="navbar-brand" href="#">AUTH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav mr-auto">
                <li id="initial" class="nav-item">
                    <a class="nav-link" href="#inicio">
                        Inicio
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-right ">
                    <li class="nav-item dropdown active">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-flag"></i>
                        Idioma
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Euskara</a>
                        <a class="dropdown-item active" href="#">Castellano</a>
                      </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('login')}}">
                            <i class="fa fa-sign-in"></i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('register')}}">
                            <i class="fa fa-user-plus"></i>
                            Registro
                        </a>
                    </li>
            </ul>
        </div>
    </div>
</nav>
