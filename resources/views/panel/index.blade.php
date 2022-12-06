@extends('layouts.app')
@section('title', "Bienvenido | BZZ 90's")
@extends('partials.navbar')

@section('content-panel')
    
    <div class="container">
        <h3><b>Bienvenid@ {{ Auth::user()->name." ".Auth::user()->last_name }}</b></h3> 
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Panel principal') }}</div>

                    <div class="card-body">
                        En esta parte del sistema vas a poder manipular información de los usuarios,
                        editando datos de los mismos o eliminandolos, por otro lado, vas a poder ver las reservas 
                        que solicitan los clientes desde la vista de contactanos.
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('img/panel/index.png') }}" alt="..." width="500">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
