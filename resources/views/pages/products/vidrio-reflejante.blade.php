@extends('pages.productos')
@section('product')

<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/bg-vidrio.png')}});">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 align-self-center p-static order-2 text-center ">
                    <h1 class="text-dark"> <strong>VIDRIO REFLEJANTE</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light  d-block text-center">
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
                        <h2 class="font-weight-bold text-tech">VIDRIO REFLEJANTE</h2>
                        <p class="text-justify mt-2"> El vidrio reflejante es un vidrio de diseño funcional pues reduce la transmisión solar y calórica, gracias a una capa de silicio que recubre una de sus caras, que produce un efecto “espejo”. Además, su efecto reflector,
                            brinda una apariencia estética y de confort, pues permite la entrada de luz suficiente para un ambiente adecuado.
                        </p>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                                <tr class="info text-center">
                                    <th>
                                        COLORES DISPONIBLES
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
                                        Reflejante bronce
                                    </td>
                                    <td>
                                        4 mm / 5.5mm
                                    </td>
                                    <td>
                                        214 x 165 / 244 x 330
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Reflejante papiro
                                    </td>
                                    <td>
                                        4 mm / 5.5mm /8 mm
                                    </td>
                                    <td>
                                        214 x 165 / 244 x 330
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Reflejante azul electra
                                    </td>
                                    <td>
                                        4 mm / 5.5mm
                                    </td>
                                    <td>
                                        214 x 165 / 244 x 330
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Reflejante bronce
                                    </td>
                                    <td>
                                        4 mm / 5.5mm
                                    </td>
                                    <td>
                                        214 x 165 / 244 x 330
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

                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/reflejante/reflejante-azul-eclectra.png')}}" title="REFLEJANTE AZUL ALECTRA">
                                <img class="img-fluid" src="{{asset('img/vidrios/reflejante/reflejante-azul-eclectra.png')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/reflejante/reflejante-euro-grey.png')}}" title="REFLEJANTE EURO GREY">
                                <img class="img-fluid" src="{{asset('img/vidrios/reflejante/reflejante-euro-grey.png')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/reflejante/reflejante-papiro.png')}}" title="REFLEJANTE PAPIRO">
                                <img class="img-fluid" src="{{asset('img/vidrios/reflejante/reflejante-papiro.png')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/reflejante/reflejante-bronce.png')}}" title="REFLEJANTE BRONCE">
                                <img class="img-fluid" src="{{asset('img/vidrios/reflejante/reflejante-bronce.png')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/reflejante/reflejante-verde.png')}}" title="REFLEJANTE VERDE">
                                <img class="img-fluid" src="{{asset('img/vidrios/reflejante/reflejante-verde.png')}}" width="150" height="130" alt="Project">
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
                                <li class="nav-item"><a class="nav-link  " href="/productos/vidrios/laminado">VIDRIO
                                        LAMINADO</a></li>
                                <li class="nav-item"><a class="nav-link" href="/productos/vidrios/incoloro">VIDRIO
                                        INCOLORO</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/productos/vidrios/coloro">VIDRIO DE
                                        COLOR</a></li>
                                <li class="nav-item"><a class="nav-link active" href="/productos/vidrios/reflejante">VIDRIO
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

                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-tech">Durabilidad :</strong><a class="text-dark"> Alta resistencia a la abrasión y
                                        excelente resistencia al rayado.</a></li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-tech">Control solar
                                        :</strong><a class="text-dark"> Refleja una gran
                                        proporción de la radiación solar, lo que restringe
                                        la ganancia de calor dentro del edificio..</a>
                                </li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-tech">Confort :</strong><a class="text-dark"> Permite una cantidad adecuada de
                                        luz natural.</a></li>
                            </ul>
                        </div>
                    </section>
                </div>
                <a class="lightbox mb-2" href="{{asset('img/ofertas/oferta-lateral.png')}}" data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" src="{{asset('img/ofertas/oferta-lateral.png')}}" alt="Project Image">
                </a>

            </div>
        </div>

    </div>

    @include('shared.cotiza')

</div>
    
@endsection