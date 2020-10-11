@extends('welcome')
@section('contenido')

<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/fondo-contactanos.png')}});">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 align-self-center p-static order-2 text-center ">
                    <h1 class=""> <strong>COMUNICATE CON NOSOTROS</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light  d-block text-center">
                        <li><a class="" href="#">Inicio</a></li>
                        <li class="active">contactanos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
        
    <div class="container py-2 ">
        <div class="row">
            <div class="col-lg-6">
                <div class="overflow-hidden mb-1">
                    <h2 class="font-weight-bold text-tech text-7 mb-0">COTIZACIÓN - CONSULTA</h2>
                </div>
                <div class="overflow-hidden mb-4 pb-3">
                    <p class="mb-0">¿Deseas recibir información sobre nuestros productos o servicios? Escríbenos!
                    </p>
                </div>

                @if (session('msjEnvio'))
                    <div class="modal fade show" id="modalaviso" tabindex="-1" aria-labelledby="exampleModalLiveLabel" style="background-color: #000000b3; display: flex; align-items: center; padding-right: 17px;" aria-labelledby="formModalLabel" aria-modal="true" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLiveLabel">Mensaje enviado</h5>
                                <button type="button" id="cerrar" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="false">×</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <p>{{session('msjEnvio')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @include('pages.formulario')
            </div>
            <div class="col-lg-6">
                <div class="overflow-hidden mb-1">
                    <h2 class="font-weight-bold text-tech text-right text-7 mb-0">NUESTRAS OFICINAS</h2>
                </div>
                <div class="overflow-hidden mb-4 pb-3">
                    <p class="mb-0 text-right">Visítanos! Estaremos gustosos de asesorarte en tu nuevo proyecto.
                    </p>
                </div>
                <div class="row ">
                    <div class="col">
                        <div class="card bg-color-grey card-text-color-hover-light border-0 bg-color-hover-primary transition-2ms box-shadow-1 box-shadow-1-primary box-shadow-1-hover">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class=" text-4 text-center font-weight-normal-bold">Oficina Principal
                                        </h4>
                                    </div>
                                    <div class="col-lg-8">
                                        <ul class="list list-icons esp list-icons-style-2">
                                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark"></strong><a class="text-dark">
                                                    #1198 Alfonso Ugarte, Chiclayo</a> </li>
                                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark"></strong><a class="text-dark"> (074)
                                                    227 693 - 922 290 905</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4 bg-color-grey card-text-color-hover-light border-0 bg-color-hover-primary transition-2ms box-shadow-1 box-shadow-1-primary box-shadow-1-hover">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class=" text-4 text-center font-weight-normal-bold">Oficina Sucursal 1
                                        </h4>
                                    </div>
                                    <div class="col-lg-8">
                                        <ul class="list list-icons esp list-icons-style-2">
                                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark"></strong><a class="text-dark">
                                                    #1147 Juan Cuglievan ,
                                                    Chiclayo</a> </li>
                                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark"></strong><a class="text-dark"> (074) 204
                                                    317</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4 bg-color-grey card-text-color-hover-light border-0 bg-color-hover-primary transition-2ms box-shadow-1 box-shadow-1-primary box-shadow-1-hover">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class=" text-4 text-center  font-weight-normal-bold">Oficina Sucursal 2</h4>
                                    </div>
                                    <div class="col-lg-8">
                                        <ul class="list list-icons esp list-icons-style-2">
                                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark"></strong><a class="text-dark">
                                                    #1175 Juan Cuglievan ,
                                                    Chiclayo</a> </li>
                                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark"></strong><a class="text-dark"> 937 061
                                                    136</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="google-map-borders">
        <div class="google-map m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="height:450px;">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.011480817377!2d-79.84330608585674!3d-6.768453368068483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ceed9d49031cf%3A0x2d472717c9d545ec!2sAlfonso%20Ugarte%201198%2C%20Chiclayo%2014001!5e0!3m2!1ses!2spe!4v1601515713635!5m2!1ses!2spe"
                height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </div>
    </div>
</div>
@endsection