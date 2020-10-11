@extends('pages.productos')
@section('product')

<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/bg-vidrio.png')}});">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 align-self-center p-static order-2 text-center ">
                    <h1 class="text-dark"> <strong>ACCESORIOS GENERALES</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light  d-block text-center">
                        <li><a class="text-dark" href="#">Inicio</a></li>
                        <li class="text-dark active">Productos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">
        <div class="row">

            <div class="col-lg-9 order-2">

                <div class="sort-destination-loader sort-destination-loader-loaded">
                    <div class="row portafolio-list sort-destination" data-sort-id="portafolio" data-filter="*" data-plugin-options="{'layoutMode': 'fitRows'}" style="position: relative; height: 538.609px;">

                        <div class="col-sm-6 col-lg-4 isotope-item 1" style="position: absolute; left: 0px; top: 0px;">
                            <h5 class="text-uppercase mt-4">GRIS TRANSPARENTE</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-gris-transparente.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-gris-transparente.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 3" style="position: absolute; left: 213.75px; top: 0px;">
                            <h5 class="text-uppercase mt-4">GRIS REFLECTIVO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-gris-reflectivo.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-gris-reflectivo.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 5" style="position: absolute; left: 427.5px; top: 0px;">
                            <h5 class="text-uppercase mt-4">TRANSPARENTE</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-transparente.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-transparente.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item  color" style="position: absolute; left: 641.25px; top: 0px;">
                            <h5 class="text-uppercase mt-4">LECHOZO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-lechozo.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-lechozo.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 7" style="position: absolute; left: 0px; top: 133.875px;">
                            <h5 class="text-uppercase mt-4">BRONCE</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-bronce.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-bronce.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 9" style="position: absolute; left: 213.75px; top: 133.875px;">
                            <h5 class="text-uppercase mt-4">AZUL</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-azul.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-azul.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 11" style="position: absolute; left: 427.5px; top: 133.875px;">
                            <h5 class="text-uppercase mt-4">TURQUEZA</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-turqueza.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-turqueza.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item color" style="position: absolute; left: 641.25px; top: 133.875px;">
                            <h5 class="text-uppercase mt-4">VERDE</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-verde.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-verde.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 13" style="position: absolute; left: 0px; top: 267.75px;">
                            <h5 class="text-uppercase mt-4">ROJO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-rojo.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-rojo.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 15" style="position: absolute; left: 213.75px; top: 267.75px;">
                            <h5 class="text-uppercase mt-4">NARANJA</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/naranja.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/naranja.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 17" style="position: absolute; left: 427.5px; top: 267.75px;">
                            <h5 class="text-uppercase mt-4">AMARILLO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-amarillo.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-amarillo.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 2" style="position: absolute; left: 641.25px; top: 267.75px;">
                            <h5 class="text-uppercase mt-4">CONECTOR BASE Y TAPA</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/conec-base-tapa1.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/conec-base-tapa1.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 4" style="position: absolute; left: 0px; top: 401.625px;">
                            <h5 class="text-uppercase mt-4">C.BASE Y TAPA ALUMINIO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/conec-base-tapa-alu1.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/conec-base-tapa-alu1.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 6" style="position: absolute; left: 213.75px; top: 401.625px;">
                            <h5 class="text-uppercase mt-4">CONECTOR H</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/conec-h1.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/conec-h1.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 8" style="position: absolute; left: 427.5px; top: 401.625px;">
                            <h5 class="text-uppercase mt-4">CONECTOR TERMINAL</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/conec-terminal1.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/conec-terminal1.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 10" style="position: absolute; left: 0px; top: 0px;">
                            <h5 class="text-uppercase mt-4">GRIS TRANSPARENTE</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-gris-transparente.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-gris-transparente.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 12" style="position: absolute; left: 213.75px; top: 0px;">
                            <h5 class="text-uppercase mt-4">GRIS REFLECTIVO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-gris-reflectivo.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-gris-reflectivo.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 14" style="position: absolute; left: 427.5px; top: 0px;">
                            <h5 class="text-uppercase mt-4">TRANSPARENTE</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-transparente.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-transparente.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item  16" style="position: absolute; left: 641.25px; top: 0px;">
                            <h5 class="text-uppercase mt-4">LECHOZO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-lechozo.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-lechozo.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 1" style="position: absolute; left: 0px; top: 133.875px;">
                            <h5 class="text-uppercase mt-4">BRONCE</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-bronce.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-bronce.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 2" style="position: absolute; left: 213.75px; top: 133.875px;">
                            <h5 class="text-uppercase mt-4">AZUL</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-azul.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-azul.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 3" style="position: absolute; left: 427.5px; top: 133.875px;">
                            <h5 class="text-uppercase mt-4">TURQUEZA</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-turqueza.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-turqueza.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 4" style="position: absolute; left: 641.25px; top: 133.875px;">
                            <h5 class="text-uppercase mt-4">VERDE</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-verde.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-verde.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 5" style="position: absolute; left: 0px; top: 267.75px;">
                            <h5 class="text-uppercase mt-4">ROJO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-rojo.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-rojo.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 6" style="position: absolute; left: 213.75px; top: 267.75px;">
                            <h5 class="text-uppercase mt-4">NARANJA</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/naranja.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/naranja.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 7" style="position: absolute; left: 427.5px; top: 267.75px;">
                            <h5 class="text-uppercase mt-4">AMARILLO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-amarillo.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-amarillo.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 8" style="position: absolute; left: 641.25px; top: 267.75px;">
                            <h5 class="text-uppercase mt-4">CONECTOR BASE Y TAPA</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/conec-base-tapa1.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/conec-base-tapa1.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 9" style="position: absolute; left: 0px; top: 401.625px;">
                            <h5 class="text-uppercase mt-4">C.BASE Y TAPA ALUMINIO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/conec-base-tapa-alu1.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/conec-base-tapa-alu1.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 10" style="position: absolute; left: 213.75px; top: 401.625px;">
                            <h5 class="text-uppercase mt-4">CONECTOR H</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/conec-h1.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/conec-h1.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 11" style="position: absolute; left: 427.5px; top: 401.625px;">
                            <h5 class="text-uppercase mt-4">CONECTOR TERMINAL</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/conec-terminal1.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/conec-terminal1.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item  12" style="position: absolute; left: 641.25px; top: 0px;">
                            <h5 class="text-uppercase mt-4">LECHOZO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-lechozo.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-lechozo.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 13" style="position: absolute; left: 0px; top: 133.875px;">
                            <h5 class="text-uppercase mt-4">BRONCE</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-bronce.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-bronce.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 14" style="position: absolute; left: 213.75px; top: 133.875px;">
                            <h5 class="text-uppercase mt-4">AZUL</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-azul.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-azul.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 15" style="position: absolute; left: 427.5px; top: 133.875px;">
                            <h5 class="text-uppercase mt-4">TURQUEZA</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-turqueza.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-turqueza.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 16" style="position: absolute; left: 641.25px; top: 133.875px;">
                            <h5 class="text-uppercase mt-4">VERDE</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-verde.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-verde.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 17" style="position: absolute; left: 0px; top: 267.75px;">
                            <h5 class="text-uppercase mt-4">ROJO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-rojo.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="img/policarbonato/color-rojo.jpg" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 18" style="position: absolute; left: 213.75px; top: 267.75px;">
                            <h5 class="text-uppercase mt-4">NARANJA</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/naranja.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/naranja.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 isotope-item 18" style="position: absolute; left: 427.5px; top: 267.75px;">
                            <h5 class="text-uppercase mt-4">AMARILLO</h5>
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-amarillo.jpg')}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="{{asset('img/policarbonato/color-amarillo.jpg')}}" alt="Project Image">
                            </a>
                        </div>
                    </div>
                    <!--<div class="row">
                        
                                <div class="col">
                                    <ul class="pagination float-right">
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                                    </ul>
                                </div>
                            </div>
                            <div class="bounce-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>-->
                    <div class="bounce-loader">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 order-1">
                <aside class="sidebar">
                    <h5 class="font-weight-bold"><strong>POLICARBONATO Y ACCESORIOS</strong></h5>
                    <ul class="nav nav-list flex-column sort-source mb-5 mt-3" data-sort-id="portafolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                        <li class="nav-item active" data-option-value=""><a class="nav-link active" href="#">TODOS</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">ACCESORIOS DE VIDRIO</a>
                            <ul>
                                <li class="nav-item" data-option-value=".1"><a class="nav-link" href="#">ACCES.
                                        DE TEMPLADO</a></li>
                                <li class="nav-item " data-option-value=".2"><a class="nav-link " href="#">ACCES. DE VITRINA</a></li>
                                <li class="nav-item" data-option-value=".3"><a class="nav-link" href="#">SEGURO
                                        PARA VENTANAS</a></li>
                                <li class="nav-item " data-option-value=".4"><a class="nav-link " href="#">SILICONAS</a></li>
                                <li class="nav-item" data-option-value=".5"><a class="nav-link" href="#">SUJETADORES PARA VIDRIO</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">ACCESORIOS GENERALES</a>
                            <ul>
                                <li class="nav-item" data-option-value=".6"><a class="nav-link" href="#">KITS DE
                                        DUCHA</a></li>
                                <li class="nav-item " data-option-value=".7"><a class="nav-link " href="#">RODAMIENTO & GARRUCHAS</a></li>
                                <li class="nav-item" data-option-value=".8"><a class="nav-link" href="#">GARRUCHAS PARA SERIES</a></li>
                                <li class="nav-item " data-option-value=".9"><a class="nav-link " href="#">FRENOS DE PISO</a></li>
                                <li class="nav-item" data-option-value=".10"><a class="nav-link" href="#">KITS
                                        DE DUCHA</a></li>
                                <li class="nav-item " data-option-value=".11"><a class="nav-link " href="#">BRIDAS & CANOPLAS</a></li>
                                <li class="nav-item" data-option-value=".12"><a class="nav-link" href="#">CINTAS
                                        DC</a></li>
                                <li class="nav-item " data-option-value=".13"><a class="nav-link " href="#">BROCAS Y AUTOROSCANTES</a></li>
                                <li class="nav-item" data-option-value=".14"><a class="nav-link" href="#">BURLETE & FELPA & CINTA </a></li>
                                <li class="nav-item " data-option-value=".15"><a class="nav-link " href="#">LAMINAS DE SEGURIDAD</a></li>
                                <li class="nav-item" data-option-value=".16"><a class="nav-link" href="#">PAVONADAS </a></li>
                                <li class="nav-item " data-option-value=".17"><a class="nav-link " href="#">TIRADORES DE ACERO</a></li>
                                <li class="nav-item " data-option-value=".18"><a class="nav-link " href="#">ACCESORIOS DE ACERO</a></li>
                            </ul>
                        </li>
                    </ul>
                </aside>
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