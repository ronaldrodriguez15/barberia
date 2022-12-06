<div class="container-fluid sidebar">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 color-primary">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="{{ asset('img/logo.png') }}" class="rounded-circle" alt="logo-brand" width="70">
                    <span class="fs-5 d-none d-sm-block ms-2">BZZ 90's</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a class="nav-link align-middle px-0 text-color-secondary-hover {{ Request::is('home') ? 'text-color-secondary' : 'text-white' }}" href="{{ route('home') }}">
                            <i class="fa-solid fa-house-user"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link px-0 align-middle text-color-secondary-hover {{ Request::is('usuarios') ? 'text-color-secondary' : 'text-white' }}" href="{{ route('usuarios.index') }}">
                            <i class="fa-solid fa-users"></i></i> <span class="ms-1 d-none d-sm-inline">Usuarios</span> 
                        </a>
                    </li>
                    <li>
                        <a class="nav-link px-0 align-middle text-color-secondary-hover {{ Request::is('servicios') ? 'text-color-secondary' : 'text-white' }}" href="{{ route('servicios.index') }}">
                            <i class="fa-sharp fa-solid fa-bell-concierge"></i> <span class="ms-1 d-none d-sm-inline">Servicios</span>
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none '/'-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('img/user.png') }}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1 text-color-secondary-hover"> {{ Auth::user()->name." ".Auth::user()->last_name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Datos personales</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item color-secondary" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Cerrar sesion') }}
                            </a>
        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
            
            <div>
                @yield('content-panel')
            </div>
            
        </div>
    </div>
</div>