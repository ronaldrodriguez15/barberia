@extends('layouts.app')
@section('title', "Editar usuario | BZZ 90's")
@extends('partials.navbar')

@section('content-panel')
    <div class="container">
        <h3><b>Editar a {{ $user->name }}</b></h3> 
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-6">
                        En este formulario podrás editar el registro que seleccionaste, ten en cuenta llenar correctamente
                        el formulario con los datos correspondientes del registro.
                        <br><br><br>
                        <form action="{{ route('usuarios.update', $user->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <label for="name">Nombres: </label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                                    @error('name')
                                        <small class="error-messages">{{ $message }}</small>
                                    @enderror<br>
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name">Apellidos: </label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $user->last_name }}">
                                    @error('last_name')
                                        <small class="error-messages">{{ $message }}</small>
                                    @enderror<br>
                                </div>
                                <div class="col-md-12">
                                    <label for="email">Correo electronico: </label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="alguien@example.com" value="{{ $user->email }}">
                                    @error('email')
                                        <small class="error-messages">{{ $message }}</small>
                                    @enderror<br>
                                </div>
                                <div class="col-md-12 mt-5">
                                    <button type="submit" class="btn btn-success mb-5 color-secondary" id="updateDataUser"><i class="fa-solid fa-arrows-rotate"></i> Actualizar usuario</button>
                                    <button type="reset" class="btn btn-dark mb-5 text-end"><i class="fa-solid fa-eraser"></i> Limpiar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('img/login/Login.jpg') }}" class="rounded" alt="..." width="400">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection