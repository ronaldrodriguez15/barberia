<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light color-primary shadow-md">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{ asset('img/logo.png') }}" alt="logo-brand" width="60">
        </a>
        <button class="navbar-toggler color-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto text-white">
                <li class="nav-item">
                    <a class="nav-link text-color-secondary-hover {{ Request::is('/') ? 'text-color-secondary' : 'text-white' }}" href="{{ route('welcome') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color-secondary-hover {{ Request::is('quienes-somos') ? 'text-color-secondary' : 'text-white' }}" href="{{ route('quienes-somos') }}">¿Quienes somos?</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-color-secondary-hover {{ Request::is('contactanos') ? 'text-color-secondary' : 'text-white' }}" href="{{ route('contactanos') }}">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary color-secondary rounded" href="{{ route('login') }}">Login <i class="fa-solid fa-user ms-1"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>


