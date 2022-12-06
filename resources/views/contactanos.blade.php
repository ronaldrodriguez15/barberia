@extends('layouts.app')

@section('title', "Servicios | BZZ 90's")

@section('content')

{{-- Navbar landing --}}
@include('partials.landing.navbar')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ asset('img/inicio/iniciosesionsection.jpg') }}" class="d-block w-100" alt="carrousel" height="900">
        <div class="carousel-caption">
            <h5>Your Dream House</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
          </div>
        </div>
    </div>
</div>
<br>

{{-- out Projects --}}
<section id="portfolio" class="portfolio section-padding mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Our Projects</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2 mb-2">
                    <div class="card-body text-dark">
                      <div class="img-area mb-4">
                          <img src="{{ asset('img/Servicios/cortes/Fade_bajo.jpg') }}" class="img-fluid" alt="corte_1">
                      </div>
                        <h3 class="card-title">Building Make</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2 mb-2">
                    <div class="card-body text-dark">
                      <div class="img-area mb-4">
                          <img src="{{ asset('img/Servicios/cortes/French_Crop.jpg') }}" class="img-fluid" alt="corte_2">
                      </div>
                        <h3 class="card-title">Building Make</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                        <button class="btn bg-warning text-dark">learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2 mb-2">
                    <div class="card-body text-dark">
                      <div class="img-area mb-4">
                          <img src="{{ asset('img/Servicios/cortes/Mullet.jpg') }}" class="img-fluid" alt="corte_3" width="305">
                      </div>
                        <h3 class="card-title">Building Make</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2 mb-2">
                    <div class="card-body text-dark">
                      <div class="img-area mb-4">
                          <img src="{{ asset('img/Servicios/cortes/Mullet.jpg') }}" class="img-fluid" alt="corte_3" width="305">
                      </div>
                        <h3 class="card-title">Building Make</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2 mb-2">
                    <div class="card-body text-dark">
                      <div class="img-area mb-4">
                          <img src="{{ asset('img/Servicios/cortes/Mullet.jpg') }}" class="img-fluid" alt="corte_3" width="305">
                      </div>
                        <h3 class="card-title">Building Make</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2 mb-2">
                    <div class="card-body text-dark">
                      <div class="img-area mb-4">
                          <img src="{{ asset('img/Servicios/cortes/Mullet.jpg') }}" class="img-fluid" alt="corte_3" width="305">
                      </div>
                        <h3 class="card-title">Building Make</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2 mb-2">
                    <div class="card-body text-dark">
                      <div class="img-area mb-4">
                          <img src="{{ asset('img/Servicios/cortes/Mullet.jpg') }}" class="img-fluid" alt="corte_3" width="305">
                      </div>
                        <h3 class="card-title">Building Make</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2 mb-2">
                    <div class="card-body text-dark">
                      <div class="img-area mb-4">
                          <img src="{{ asset('img/Servicios/cortes/Mullet.jpg') }}" class="img-fluid" alt="corte_3" width="305">
                      </div>
                        <h3 class="card-title">Building Make</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2 mb-2">
                    <div class="card-body text-dark">
                      <div class="img-area mb-4">
                          <img src="{{ asset('img/Servicios/cortes/Mullet.jpg') }}" class="img-fluid" alt="corte_3" width="305">
                      </div>
                        <h3 class="card-title">Building Make</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <br>

  {{-- Contact us --}}
    <section id="about" class="about section-padding mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Contactanos</h2>
                        <p>Solicita tu corte inmediatamente.</p>
                    </div>

                    <!-- Mensaje de confirmación al momento de ejecutar una funcionalidad -->
                    @if (isset($message_store))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $message_store }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <form action="{{ route('servicios.store') }}" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <label for="names">Nombres y apellidos: </label>
                                <input type="text" class="form-control" name="names" id="names">
                                @error('names')
                                    <small class="error-messages">{{ $message }}</small>
                                @enderror<br>
                            </div>
                            <div class="col-md-6">
                                <label for="fecha_nacimiento">Fecha de nacimiento: </label>
                                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
                                @error('fecha_nacimiento')
                                    <small class="error-messages">{{ $message }}</small>
                                @enderror<br>
                            </div>
                            <div class="col-md-6">
                                <label for="tpo_identification">Tipo de identificación: </label>
                                <select class="form-select" aria-label="Default select example" name="tpo_identification" required>
                                    <option selected disabled>Seleccionar</option>
                                    <option value="1">Tarjeta de identidad</option>
                                    <option value="2">Cédula de ciudadanía</option>
                                    <option value="3">Cédula de extranjeria</option>
                                </select>
                                @error('tpo_identification')
                                    <small class="error-messages">{{ $message }}</small>
                                @enderror<br>
                            </div>
                            <div class="col-md-6">
                                <label for="nro_identification">Número de identificación</label>
                                <input type="number" class="form-control" name="nro_identification" id="nro_identification">
                                @error('nro_identification')
                                    <small class="error-messages">{{ $message }}</small>
                                @enderror<br>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Correo electronico: </label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="alguien@example.com" required>
                                @error('email')
                                    <small class="error-messages">{{ $message }}</small>
                                @enderror<br>
                            </div>
                            <div class="col-md-6">
                                <label for="address">Dirección de residencia: </label>
                                <input type="text" class="form-control" name="address" id="address" required>
                                @error('address')
                                    <small class="error-messages">{{ $message }}</small>
                                @enderror<br>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Teléfono fijo: </label>
                                <input type="number" class="form-control" name="phone" id="phone" required>
                                @error('phone')
                                    <small class="error-messages">{{ $message }}</small>
                                @enderror<br>
                            </div>
                            <div class="col-md-6">
                                <label for="phone_two">Teléfono movil: </label>
                                <input type="number" class="form-control" name="phone_two" id="phone_two" required>
                                @error('phone_two')
                                    <small class="error-messages">{{ $message }}</small>
                                @enderror<br>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="tpo_corte" style="height: 100px" required></textarea>
                                    <label for="floatingTextarea2">Describe el corte de cabello que tienes en mente...</label>
                                    @error('tpo_corte')
                                    <small class="error-messages">{{ $message }}</small>
                                @enderror<br>
                                </div>
                            </div>                
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success mb-5" id="updateDataUser"><i class="fa-solid fa-paper-plane"></i> Solicitar servicio</button>
                                <button type="reset" class="btn btn-primary mb-5 text-end"><i class="fa-solid fa-eraser"></i> Limpiar</button>
                            </div> 
                        </div>
                    </form>

                </div>

                <!-- Imagen del form (diseño) -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 text-center mt-3">
                    <img src="{{ asset('img/Registrarse/Registrarse.jpg') }}" class="rounded-3" alt="user" width="450">
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('partials.footer')

@endsection