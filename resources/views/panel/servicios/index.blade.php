@extends('layouts.app')
@section('title', "Servicios | BZZ 90's")
@extends('partials.navbar')

@section('content-panel')
    <div class="container">
        <h3><b>Servicios</b></h3> 
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                En esta parte del sistema vas a poder ver las reservas que han sido registradas 
                desde la vista de contacto, no olvides llamar al cliente para el servicio.
                <br>
                <br>
                <!-- Mensaje de confirmación al momento de ejecutar una funcionalidad -->
                @if (session()->get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <br>
                <div class="rounded">
                    <table class="table">
                        <thead class="background-blue color-secondary text-center">
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha nacimiento</th>
                                <th>tipo identificatión</th>
                                <th>Correo</th>
                                <th>Dirección</th>
                                <th>Teléfonos de contacto</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            
                            @forelse ($services as $service)
                            <tr>
                                <td>{{ $service['names'] }}</td>
                                <td>{{ $service['fch_age'] }}</td>
                                <td>{{ $service['tpo_identification'] }}</td>
                                <td>{{ $service['email'] }}</td>
                                <td>{{ $service['address'] }}</td>
                                <td>{{ $service['phone'] }}</td>
                                <td>
                                    <form action="{{ route('servicios.destroy', $service->id) }}" id="formDelete"
                                        method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit" class="btn btn-danger m-1"><i class="fas fa-trash-alt"></i></button>
                                    </form> 
                                </td>
                            </tr>  
                            @empty
                                <tr>
                                    <td colspan="7">No hay ningún Servicio pendiente</th>
                                </tr>
                            @endforelse          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection