@extends('pages.productos')
@section('product')
   
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/bg-vidrio.png')}});">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 align-self-center p-static order-2 text-center ">
                    <h1 class="text-dark"> <strong>VIDRIO ESPEJO</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light  d-block text-center">
                        <li><a class="text-dark" href="#">Inicio</a></li>
                        <li class="text-dark">Productos</li>
                        <li class="text-dark active">vidrio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">

        <div class="row">

            <div class="col-lg-9">

                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-tech">VIDRIO ESPEJO</h2>
                        <p class="text-justify mt-2">
                            Este vidrio se puede utilizar para distintos fines como ventanas, bloques de pared,manparas y accesorios tanto en el hogar, negocio, oficina, salones, etc. Mejoran notablemente la estética del ambiente en el que sea colocado y transmiten una sension de
                            frescura y luminosidad.
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                                <tr class="info text-center">
                                    <th>
                                        ESPESOR
                                    </th>
                                    <th>
                                        MEDIDAS - PLANCHA (mts)
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>
                                        2 mm
                                    </td>
                                    <td>
                                        160 x 220
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        3 mm
                                    </td>
                                    <td>
                                        183 x 244
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
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/espejo/color-espejo.png')}}" title="VIDRIO ESPEJO 2mm">
                                <img class="img-fluid" src="{{asset('img/vidrios/espejo/color-espejo.png')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/espejo/Espejo 3mm.jpg')}}" title="VIDRIO ESPEJO 3mm">
                                <img class="img-fluid" src="{{asset('img/vidrios/espejo/Espejo 3mm.jpg')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/espejo/edificio.jpg')}}" title="UTILIZADO EN EDIFICIOS">
                                <img class="img-fluid" src="{{asset('img/vidrios/espejo/edificio.jpg')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/espejo/pared.jpeg')}}" title="UTILIZADO EN PARED">
                                <img class="img-fluid" src="{{asset('img/vidrios/espejo/pared.jpeg')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/vidrios/espejo/ventana.png')}}" title="UTILIZADO EN VENTANA">
                                <img class="img-fluid" src="{{asset('img/vidrios/espejo/ventana.png')}}" width="150" height="130" alt="Project">
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
                                <li class="nav-item"><a class="nav-link" href="/productos/vidrios/reflejante">VIDRIO
                                        REFLEJANTE</a>
                                </li>
                                <li class="nav-item"><a class="nav-link " href="/productos/vidrios/catedral">VIDRIO
                                        CATEDRAL</a></li>
                                <li class="nav-item"><a class="nav-link active" href="/productos/vidrios/espejo">VIDRIO
                                        ESPEJO</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>

                <div class="toggle toggle-primary" data-plugin-toggle="">
                    <section class="toggle">
                        <label>CARACTERÍSTICAS</label>
                        <div class="toggle-content" style="display: none;">
                            <ul class="list list-icons list-primary list-borders text-2">

                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Luminosidad :</strong><a class="text-dark"> Gracias a que refleja la luz del
                                        ambiente, perfecto para zonas de escasa
                                        luminosidad.</a></li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Estética :</strong><a class="text-dark"> Gracias al efecto reflector,
                                        causa una perspectiva de espacios mas grandes.</a>
                                </li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Decorativa :</strong><a class="text-dark"> Se puede utilizar como accesorio
                                        de cualquier ambiente.</a></li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Intimidad :</strong><a class="text-dark"> Permite ver lo que hay fuera pero
                                        no permiten que nadie del exterior pueda ver el
                                        interior del ambiente.</a></li>
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