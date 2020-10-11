@extends('pages.productos')
@section('product')
    
<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/bg-vidrio.png')}});">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 align-self-center p-static order-2 text-center ">
                    <h1 class="text-dark"> <strong>VIDRIO CATEDRAL</strong></h1>
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
                        <h2 class="font-weight-bold text-tech">VIDRIO CATEDRAL</h2>
                        <p class="text-justify mt-2"> Este vidrio es de tipo decorativo, posee en una o en ambas caras una textura decorativa que transmite la luz de forma difusa e impide la visión clara, brindando según el dibujo, diferentes grados de translucidez e intimidad.

                        </p>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <table class="table table-sm table-striped table-hover ">
                            <thead class="text-center">
                                <tr class="info">
                                    <th>
                                        DESCRIPCIÓN
                                    </th>
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
                                        Catedral Karatachi
                                    </td>
                                    <td>
                                        incoloro/azul/verde/ambar/gris
                                    </td>
                                    <td>
                                        3 mm
                                    </td>
                                    <td>
                                        153 x 224
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Catedral Karatachi
                                    </td>
                                    <td>
                                        bronce
                                    </td>
                                    <td>
                                        3 mm
                                    </td>
                                    <td>
                                        122 x 224
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Catedral Llovisna
                                    </td>
                                    <td>
                                        incoloro
                                    </td>
                                    <td>
                                        3 mm
                                    </td>
                                    <td>
                                        153 x 224 </td>
                                </tr>
                                <tr>
                                    <td>
                                        Catedral Llovisna
                                    </td>
                                    <td>
                                        incoloro
                                    </td>
                                    <td>
                                        5 mm
                                    </td>
                                    <td>
                                        200 x 150
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Catedral flora
                                    </td>
                                    <td>
                                        incoloro
                                    </td>
                                    <td>
                                        3 mm
                                    </td>
                                    <td>
                                        153 x 214
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Catedral silecia
                                    </td>
                                    <td>
                                        incoloro
                                    </td>
                                    <td>
                                        3 mm
                                    </td>
                                    <td>
                                        153 x 214
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Catedral cuadriculado
                                    </td>
                                    <td>
                                        incoloro
                                    </td>
                                    <td>
                                        3 mm
                                    </td>
                                    <td>
                                        153 x 214
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Catedral marihuana
                                    </td>
                                    <td>
                                        incoloro
                                    </td>
                                    <td>
                                        3 mm
                                    </td>
                                    <td>
                                        150 x 200
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Catedral pluma
                                    </td>
                                    <td>
                                        incoloro
                                    </td>
                                    <td>
                                        3 mm
                                    </td>
                                    <td>
                                        153 x 214
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Catedral oceano
                                    </td>
                                    <td>
                                        incoloro
                                    </td>
                                    <td>
                                        3 mm
                                    </td>
                                    <td>
                                        153 x 214
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <spam class="text-2 text-color-dark">*Información referencial (Variable).</spam>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <h5 class="text-uppercase mt-4">KARATACHI</h5>
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox  mt-4" href="{{asset('img/vidrios/catedral/catedral-karatachi.jpg')}}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{asset('img/vidrios/catedral/catedral-karatachi.jpg')}}" alt="Project Image">
                        </a>
                        <h5 class="text-uppercase mt-4">KARATACHI AMBAR</h5>
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox mt-4" href="{{asset('img/vidrios/catedral/catedral-karatachi-ambar.jpg')}}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{asset('img/vidrios/catedral/catedral-karatachi-ambar.jpg')}}" alt="Project Image">
                        </a>

                        <h5 class="text-uppercase mt-4">KARATACHI AZUL</h5>
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox mt-4" href="{{asset('img/vidrios/catedral/catedral-karatachi-azul.jpg')}}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{asset('img/vidrios/catedral/catedral-karatachi-azul.jpg')}}" alt="Project Image">
                        </a>

                    </div>
                    <div class="col-lg-3">
                        <h5 class="text-uppercase mt-4">FLORA</h5>
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox mt-4" href="{{asset('img/vidrios/catedral/catedral-flora.jpg')}}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{asset('img/vidrios/catedral/catedral-flora.jpg')}}" alt="Project Image">
                        </a>
                        <h5 class="text-uppercase mt-4">PLUMA</h5>
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox mt-4" href="{{asset('img/vidrios/catedral/catedral-pluma.jpg')}}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{asset('img/vidrios/catedral/catedral-pluma.jpg')}}" alt="Project Image">
                        </a>
                        <h5 class="text-uppercase mt-4">KARTACHI VERDE</h5>
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox mt-4" href="{{asset('img/vidrios/catedral/catedral-karatachi-verde.jpg')}}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{asset('img/vidrios/catedral/catedral-karatachi-verde.jpg')}}" alt="Project Image">
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="text-uppercase mt-4">LLOVISNA</h5>
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox  mt-4" href="{{asset('img/vidrios/catedral/catedral-llovisna.jpg')}}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{asset('img/vidrios/catedral/catedral-llovisna.jpg')}}" alt="Project Image">
                        </a>
                        <h5 class="text-uppercase mt-4">SILECIA</h5>
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox  mt-4" href="{{asset('img/vidrios/catedral/catedral-silecia.jpg')}}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{asset('img/vidrios/catedral/catedral-silecia.jpg')}}" alt="Project Image">
                        </a>
                        <h5 class="text-uppercase mt-4">BRONCE</h5>
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox  mt-4" href="{{asset('img/vidrios/catedral/catedral-karatachi-bronce.jpg')}}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{asset('img/vidrios/catedral/catedral-karatachi-bronce.jpg')}}" alt="Project Image">
                        </a>

                    </div>
                    <div class="col-lg-3">
                        <h5 class="text-uppercase mt-4">OCEÁNICO</h5>
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox  mt-4" href="{{asset('img/vidrios/catedral/catedral-oceanico.jpg')}}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{asset('img/vidrios/catedral/catedral-oceanico.jpg')}}" alt="Project Image">
                        </a>
                        <h5 class="text-uppercase mt-4">MARIHUANA</h5>
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox mt-4" href="{{asset('img/vidrios/catedral/catedral-marihuana.jpg')}}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{asset('img/vidrios/catedral/catedral-marihuana.jpg')}}" alt="Project Image">
                        </a>

                        <h5 class="text-uppercase mt-4">CUADRICULADO</h5>
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox mt-4" href="{{asset('img/vidrios/catedral/catedraal-cuadriculado.jpg')}}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{asset('img/vidrios/catedral/catedraal-cuadriculado.jpg')}}" alt="Project Image">
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3  ">
                <aside class="sidebar ">
                    <ul class="nav nav-list flex-column mb-3">
                        <li class="nav-item"><a class="nav-link " href="/productos/acrilico">ACRÍLICOS</a>
                        </li>
                        <li class="nav-item"><a class="nav-link " href="/productos/aluminio/serie">ALUMINIO</a>

                        </li>
                        <li class="nav-item"><a class="nav-link " href="/productos/policarbonato">POLICARBONATO</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">VIDRIO</a>
                            <ul>
                                <li class="nav-item"><a class="nav-link  " href="productos/vidrios/laminado">VIDRIO
                                        LAMINADO</a></li>
                                <li class="nav-item"><a class="nav-link" href="productos/vidrios/incoloro">VIDRIO
                                        INCOLORO</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/productos/vidrios/coloro">VIDRIO DE
                                        COLOR</a></li>
                                <li class="nav-item"><a class="nav-link" href="/productos/vidrios/reflejante">VIDRIO
                                        REFLEJANTE</a>
                                </li>
                                <li class="nav-item"><a class="nav-link active " href="/productos/vidrios/catedral">VIDRIO
                                        CATEDRAL</a></li>
                                <li class="nav-item"><a class="nav-link " href="/productos/vidrios/espejo">VIDRIO
                                        ESPEJO</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>

                <div class="toggle toggle-primary" data-plugin-toggle="">
                    <section class="toggle active">
                        <label>CARACTERÍSTICAS</label>
                        <div class="toggle-content" style="display: none;">
                            <ul class="list list-icons list-primary list-borders text-2">

                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-tech">Confort
                                        Visual
                                        :</strong><a class="text-dark"> Atenuan la luz
                                        exterior, difuminándola
                                        en un 60%, evitando el cansancio visual.</a></li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-tech">Luminosidad :</strong><a class="text-dark"> Aseguran
                                        la transmisión y
                                        difusión luminosa.</a>
                                </li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-tech">Protección :</strong><a class="text-dark"> Debido al
                                        diseño grabado en el
                                        vidrio, genera una visión difuminada evitando la
                                        mirada directa.</a></li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-tech">Decorativa :</strong><a class="text-dark"> Los
                                        variados diseños y colores
                                        proporciona estética al ambiente.</a></li>
                            </ul>
                        </div>
                    </section>
                </div>
                <a class="lightbox mb-2" href="{{asset('img/ofertas/oferta-lateral.png')}}" data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" src="{{asset('img/ofertas/oferta-lateral.png')}}" alt="Project Image">
                </a>
                <hr>
                <a class="lightbox mb-2 mt-3" href="{{asset('img/ofertas/oferta-lateral-2.png')}}" data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" src="{{asset('img/ofertas/oferta-lateral-2.png')}}" alt="Project Image">
                </a>

            </div>
        </div>
    </div>

    @include('shared.cotiza')
</div>

@endsection