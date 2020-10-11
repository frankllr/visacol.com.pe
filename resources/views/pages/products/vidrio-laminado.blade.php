@extends('pages.productos')
@section('product')

<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/bg-vidrio.png')}});">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 align-self-center p-static order-2 text-center ">
                    <h1 class="text-dark"> <strong>VIDRIO LAMINADO</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-dark  d-block text-center">
                        <li><a class="text-dark" href="#">Inicio</a></li>
                        <li class="text-dark ">Productos</li>
                        <li class="text-dark active">vidrio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">

        <div class="row">

            <div class="col-lg-9 ">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-tech">VIDRIO LAMINADO</h2>
                        <p class="text-justify">El vidrio laminado es un vidrio de seguridad y protección, está compuesto por dos o más hojas de vidrio, unidas mediante calor y presión con una o más láminas de Polivinyl Butyral (PVB), que poseen notables propiedades
                            de adherencia, elasticidad y resistencia a la penetración y al desgarro.
                        </p>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <table class="table table-sm table-striped table-hover ">
                            <thead>
                                <tr class="info text-center">
                                    <th>
                                        COLOR DISPONIBLE
                                    </th>
                                    <th>
                                        ESPESOR
                                    </th>
                                    <th>
                                        MEDIDA - PLANCHA (mts)
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>
                                        Transparente
                                    </td>
                                    <td>
                                        4 mm
                                    </td>
                                    <td>
                                        214 x 330
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Transparente
                                    </td>
                                    <td>
                                        6 mm
                                    </td>
                                    <td>
                                        214 x 330
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Transparente
                                    </td>
                                    <td>
                                        8 mm
                                    </td>
                                    <td>
                                        214 x 330
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <spam class="text-2 text-color-dark">*Información referencial (Variable).</spam>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div class="lightbox mb-4" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/laminado/vidrio-laminado-1.jpg')}}" title="Project 1">
                                <img class="img-fluid" src="{{asset('img/vidrios/laminado/vidrio-laminado-1.jpg')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/laminado/resistencia laminado.PNG')}}" title="Project 2">
                                <img class="img-fluid" src="{{asset('img/vidrios/laminado/resistencia laminado.PNG')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/laminado/laminado-estructura.png')}}" title="Project 3">
                                <img class="img-fluid" src="{{asset('img/vidrios/laminado/laminado-estructura.png')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/laminado/resistencia laminado.PNG')}}" title="Project 2">
                                <img class="img-fluid" src="{{asset('img/vidrios/laminado/resistencia laminado.PNG')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/laminado/laminado-estructura.png')}}" title="Project 3">
                                <img class="img-fluid" src="{{asset('img/vidrios/laminado/laminado-estructura.png')}}" width="150" height="130" alt="Project">
                            </a>

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 ">

                <aside class="sidebar ">
                    <ul class="nav nav-list flex-column mb-3">
                        <li class="nav-item"><a class="nav-link " href="/productos/acrilico">ACRÍLICOS</a>
                        </li>
                        <li class="nav-item"><a class="nav-link " href="/productos/aluminio/serie">ALUMINIO</a>

                        </li>
                        <li class="nav-item"><a class="nav-link " href="/productos/policarbonato">POLICARBONATO</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">VIDRIO</a>
                            <ul>
                                <li class="nav-item"><a class="nav-link active " href="/productos/vidrios/laminado">VIDRIO
                                        LAMINADO</a></li>
                                <li class="nav-item"><a class="nav-link" href="/productos/vidrios/incoloro">VIDRIO
                                        INCOLORO</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/productos/vidrios/coloro">VIDRIO DE
                                        COLOR</a></li>
                                <li class="nav-item"><a class="nav-link" href="/productos/vidrios/reflejante">VIDRIO
                                        REFLEJANTE</a>
                                </li>
                                <li class="nav-item"><a class="nav-link " href="/productos/vidrios/catedral">VIDRIO
                                        CATEDRAL</a></li>
                                <li class="nav-item"><a class="nav-link" href="/productos/vidrios/espejo">VIDRIO
                                        ESPEJO</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>

                <div class="toggle toggle-primary" data-plugin-toggle="">
                    <section class="toggle ">
                        <label>CARACTERÍSTICAS</label>
                        <div class="toggle-content" style="display: none;">
                            <ul class="list list-icons list-primary list-borders text-2">

                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-tech">Seguridad :</strong><a class="text-dark">
                                        Evita el desprendimiento de
                                        fragmentos
                                        de vidrio en
                                        casos de sismos, terremotos y cualquier otro tipo de
                                        siniestro.</a></li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-tech">Resistencia :</strong><a class="text-dark">
                                        Gracias al PVB que contiene y que
                                        le
                                        otorga
                                        una adherencia al vidrio frente a los impactos y
                                        golpes.</a>
                                </li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-tech">Protección :</strong><a class="text-dark">
                                        Filtra
                                        más del 99% de los rayos UV, evitando
                                        la decoloración y envejecimiento de tejidos
                                        y tapizados expuestos a la luz solar.</a></li>
                            </ul>
                        </div>
                    </section>
                </div>

                <!--	<a class="lightbox mb-2" href="img/ofertas/oferta-lateral.png"
                    data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" src="img/ofertas/oferta-lateral.png" alt="Project Image">
                </a>-->

            </div>

        </div>

    </div>

    @include('shared.cotiza')

</div>

@endsection