@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8"> 
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            {{ __('Login') }}
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
        
                                <div class="row mb-3 mt-5">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3 mt-5">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                {{-- <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4 text-end">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('¿Olvidaste tu contraseña?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div> --}}
        
                                <div class="row justify-content-center mb-0 mt-5">
                                    <div class="col-md-8 text-end">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Ingresar') }}
                                        </button>
        
                                        {{-- @if (Route::has('register'))
                                            <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                        @endif --}}
                                        <a class="btn btn-primary" href="{{ route('welcome') }}">{{ __('Atrás') }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="c-footer">
    @include('partials.footer')
</div>

@endsection
