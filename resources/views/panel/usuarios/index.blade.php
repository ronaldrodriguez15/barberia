@extends('layouts.app')
@section('title', "Usuarios | BZZ 90's")
@extends('partials.navbar')

@section('content-panel')
    <div class="container">
        <h3><b>Usuarios</b></h3> 
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                En esta parte del sistema vas a poder ver todos los usuarios activos, los unicos que pueden acceder a la parte del panel,
                los usuarios van a poder ser modificados y eliminados.
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
                                <th>Apellidos</th>
                                <th>Correo electronico</th>
                                <th>Fecha de creación</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['last_name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user['created_at'] }}</td>
                                <td>
                                    <a class="btn btn-warning m-1"
                                        href="{{ route('usuarios.edit', $user->id) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                </td>
                                <td>
                                    @if (Auth::user()->id !== $user->id)
                                        <form action="{{ route('usuarios.destroy', $user->id) }}" id="formDelete"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf

                                            <button type="submit" class="btn btn-danger m-1"><i class="fas fa-trash-alt"></i></button>
                                        </form> 
                                    @else
                                        <div class="bg-danger rounded">
                                            <p class="text-white p-1">No disponible</p>
                                        </div>
                                    @endif
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
                <a class="btn btn-success rounded" href="{{ route('usuarios.create') }}"><i class="fa-solid fa-user-plus"></i> Crear usuario</a>
            </div>
        </div>
    </div>
@endsection