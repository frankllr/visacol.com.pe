@extends('welcome')
@section('contenido')
    
<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/fondo-seccion-3.png')}});">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-light"><strong>NUESTROS SERVICIOS</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a class="text-light" href="#">Inicio</a></li>
                        <li class="text-light active">SERVICIOS</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">
        <div class="row">
            <div class="col-lg-9">

                <div class="row">
                    <div class="col-sm-8 col-md-6 mb-4 mb-md-0 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms;">
                        <article>
                            <div class="row">
                                <div class="col">
                                    <a href="#" class="text-decoration-none">
                                        <img src="{{asset('img/panel/fabricacion.jpg')}}" class="img-fluid hover-effect-2 mb-3" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 class="mb-0"><a href="#" class="text-2 text-tech text-uppercase font-weight-bold pt-2 d-block  text-decoration-none">FABRICACIÓN</a>
                                    </h4>
                                    <p class="text-2">Realizamos tus trabajos, de acuerdo a tus especificaciones. Un diseño y trabajo personalizado en ventanas anti ruidos, mamparas, techos de policarbonato, puertas de duchas, cortinas, rollers, mantenimientos
                                        en general.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-8 col-md-6 mb-4 mb-md-0 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms;">
                        <article>
                            <div class="row">
                                <div class="col">
                                    <a href="#" class="text-decoration-none">
                                        <img src="{{asset('img/panel/instalacion.jpg')}}" class="img-fluid hover-effect-2 mb-3" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 class="mb-0"><a href="#" class="text-2  text-tech text-uppercase font-weight-bold pt-2 d-block text-decoration-none">INSTALACIÓN</a>
                                    </h4>
                                    <p class="text-2">Llevamos a cabo tus proyectos de vidrio templado y crudo, policarbonatos y alumnios. Somos especialistas en instalación de vidrios, puertas, ventanas, manparas y cualquier tipo de proyecto relacionado.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-md-6 mb-4 mb-md-0 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms;">
                        <article>
                            <div class="row">
                                <div class="col">
                                    <a href="#" class="text-decoration-none">
                                        <img src="{{asset('img/panel/corte-de-vidrio.jpg')}}" class="img-fluid hover-effect-2 mb-3" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 class="mb-0"><a href="#" class="text-2 text-tech text-uppercase font-weight-bold pt-2 d-block  text-decoration-none">CORTE
                                            DE VIDRIO</a></h4>
                                    <p class="text-2">Disponemos de todo tipo de vidrio y espejos de diferentes modelos (color, laminados, impresos, incoloros) y grosores, para poder cortar y realizar diseños de acuerdo a sus especificaciones, un trabajo realizado
                                        en menos de 24 horas.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-8 col-md-6 mb-4 mb-md-0 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms;">
                        <article>
                            <div class="row">
                                <div class="col">
                                    <a href="#" class="text-decoration-none">
                                        <img src="{{asset('img/panel/remodelacion.jpg')}}" class="img-fluid hover-effect-2 mb-3" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 class="mb-0"><a href="#" class="text-2 text-tech text-uppercase font-weight-bold pt-2 d-block text-decoration-none">SUMINISTRO</a>
                                    </h4>
                                    <p class="text-2">Suministramos vidrio y espejos de todos los modelos, doble vidrio, laminados, templados, crudos, impresos, etc., con un servicio de reparto diario en diferentes zonas de la provincia Chiclayo y diferentes partes
                                        del Perú.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">

                <a class="lightbox mb-2" href="{{asset('img/ofertas/oferta-lateral.png')}}" data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" src="{{asset('img/ofertas/oferta-lateral.png')}}" alt="Project Image">
                </a>
                <hr>
                <a class="lightbox mb-2" href="{{asset('img/ofertas/oferta-lateral-2.png')}}" data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" src="{{asset('img/ofertas/oferta-lateral-2.png')}}" alt="Project Image">
                </a>

            </div>
        </div>
    </div>

    @include('shared.cotiza')
</div>

@endsection