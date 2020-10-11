@extends('welcome')
@section('contenido')

<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/bg-vidrio.png')}});">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 align-self-center p-static order-2 text-center ">
                    <h1 class=""> <strong>NUESTROS LOCALES</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light  d-block text-center">
                        <li><a class="" href="#">Inicio</a></li>
                        <li class=" active">Productos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2 ">
        <div class="row">

            <div class="col-lg-9 ">
                <div class="tabs tabs-bottom tabs-center tabs-simple">
                    <ul class=" nav nav-tabs">
                        <li class="nav-item active">
                            <a class="nav-link" href="#locales" data-toggle="tab">TIENDA COMERCIAL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#almacen" data-toggle="tab">ALMACEN - DESPACHO</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="locales">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="overflow-hidden mb-1">
                                        <h3 class="font-weight-bold text-tech text-5 mb-0">LOCAL PRINCIPAL</h3>
                                    </div>
                                    <ul class="list list-icons list-icons-style-2 mt-4">
                                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Dirección :</strong><a class="text-dark"> #1098, Alfonso Ugarte - Chiclayo</a> </li>
                                        <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Telefono :</strong><a class="text-dark"> (074) 227 693 - 922 290 905</a> </li>
                                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email :</strong> <a class="text-dark"> informes@visacol.com</a></li>
                                        <li><i class="fas fa-clock top-6"></i> <strong class="text-dark">Horario :</strong> <a class="text-dark"> Lunes - Sabado / 8:00 - 1:30pm</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="google-map-borders">
                                        <div class="google-map mt-0 mb-0" style="height: 250px;">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.5013536717797!2d-79.84174377199408!3d-6.769192465018312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ceed826025fd7%3A0x65f3f4d30563e3d2!2sAlfonso%20Ugarte%201098%2C%20Chiclayo%2014001!5e0!3m2!1ses!2spe!4v1602386637367!5m2!1ses!2spe" 
                                            height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="solid my-3">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="overflow-hidden mb-1">
                                        <h3 class="font-weight-bold text-tech text-5 mb-0">SUCURSAL JUAN CUGLIEVAN #1
                                        </h3>
                                    </div>
                                    <ul class="list list-icons list-icons-style-2 mt-4">
                                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Dirección :</strong><a class="text-dark"> #1147, Juan Cuglievan - Chiclayo</a> </li>
                                        <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Telefono :</strong><a class="text-dark"> (074) 204 317</a> </li>
                                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email :</strong> <a class="text-dark"> informes@visacol.com</a></li>
                                        <li><i class="fas fa-clock top-6"></i> <strong class="text-dark">Horario :</strong> <a class="text-dark"> Lunes - Sabado / 8:00 - 1:30pm</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-6">
                                    <div class="google-map-borders">
                                        <div class="google-map mt-0 mb-0" style="height: 250px;">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1981.0048830633284!2d-79.84136409545346!3d-6.7686622940278545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ceed77860900b%3A0x9f26642d1245dec5!2sCalle%20Juan%20Cuglievan%201147%2C%20Chiclayo%2014001!5e0!3m2!1ses!2spe!4v1601516500005!5m2!1ses!2spe"
                                                height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="solid my-3">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="overflow-hidden mb-1">
                                        <h3 class="font-weight-bold text-tech text-5 mb-0">SUCURSAL JUAN CUGLIEVAN #2
                                        </h3>
                                    </div>
                                    <ul class="list list-icons list-icons-style-2 mt-4">
                                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Dirección :</strong><a class="text-dark"> #1175, Juan Cuglievan - Chiclayo</a></li>
                                        <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Telefono :</strong><a class="text-dark"> 937 061 136</a></li>
                                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email :</strong> <a class="text-dark"> informes@visacol.com</a></li>
                                        <li><i class="fas fa-clock top-6"></i> <strong class="text-dark">Horario :</strong> <a class="text-dark"> Lunes - Sabado / 8:00 - 1:30pm</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-6">
                                    <div class="google-map-borders">
                                        <div class="google-map mt-0 mb-0" style="height: 250px;">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1981.005398719137!2d-79.84152304194029!3d-6.768536634952818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ceed782738359%3A0x5a4ec02c73630b54!2sCalle%20Juan%20Cuglievan%201175%2C%20Chiclayo%2014001!5e0!3m2!1ses!2spe!4v1601516562776!5m2!1ses!2spe"
                                                height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="almacen">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="overflow-hidden mb-1">
                                        <h3 class="font-weight-bold text-tech text-5 mb-0">ALMACEN 1 </h3>
                                    </div>
                                    <ul class="list list-icons list-icons-style-2 mt-4">
                                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Dirección :</strong><a class="text-dark"> Carretera Panamericana Norte K872, Chiclayo </a> </li>
                                        <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Telefono :</strong><a class="text-dark"> (074) 227 693 - 922 290 905</a> </li>
                                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email :</strong> <a class="text-dark"> informes@visacol.com</a></li>
                                        <li><i class="fas fa-clock top-6"></i> <strong class="text-dark">Horario :</strong> <a class="text-dark"> Lunes - Sabado / 8:00 - 1:30pm</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="google-map-borders">
                                        <div id="googlemaps1" class="google-map mt-0 mb-0" style="height: 250px;"></div>
                                    </div>
                                </div>
                            </div>

                            <hr class="solid my-3">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="overflow-hidden mb-1">
                                        <h3 class="font-weight-bold text-tech text-5 mb-0">ALMACEN 2
                                        </h3>
                                    </div>
                                    <ul class="list list-icons list-icons-style-2 mt-4">
                                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Dirección :</strong><a class="text-dark"> Mz F1 - Lt 9 Comunidad Campesina - Paita</a> </li>
                                        <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Telefono :</strong><a class="text-dark"> (074) 204 317</a> </li>
                                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email :</strong> <a class="text-dark"> informes@visacol.com</a></li>
                                        <li><i class="fas fa-clock top-6"></i> <strong class="text-dark">Horario :</strong> <a class="text-dark"> Lunes - Sabado / 8:00 - 1:30pm</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-6">
                                    <div class="google-map-borders">
                                        <div id="googlemaps2" class="google-map mt-0 mb-0" style="height: 250px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 ">
                <a class="lightbox mb-2" href="{{asset('img/ofertas/oferta-lateral.png')}}" data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" src="{{asset('img/ofertas/oferta-lateral.png')}}" alt="Project Image">
                </a>
                <hr>
                <a class="lightbox mb-2 " href="{{asset('img/ofertas/oferta-lateral-2.png')}}" data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" src="{{asset('img/ofertas/oferta-lateral-2.png')}}" alt="Project Image">
                </a>
            </div>

        </div>
    </div>

    <section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h3><strong class="font-weight-bold">¡VISACOL </strong> tiene todo lo que necesitas para empezar<strong class="font-weight-bold"> tu nuevo
                                proyecto!</strong></h3>
                        <p class="mb-0">Hagamos una realidad ese proyecto que tienes en mente.</p>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="call-to-action-btn">
                        <a href="/contactanos" target="_blank" class="btn btn-modern text-2 btn-tech">COTIZA CON NOSOTROS</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="left: 110%; top: -40px;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
    
@endsection