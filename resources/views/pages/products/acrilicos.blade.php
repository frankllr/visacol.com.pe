@extends('pages.productos')
@section('product')
    
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/bg-vidrio.png')}});">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 align-self-center p-static order-2 text-center ">
                    <h1 class="text-dark"> <strong>ACRÍLICOS</strong></h1>
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
            <div class="col-lg-9">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-tech">ACRÍLICOS O POLIESTILENO</h2>
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
                                        DISEÑO
                                    </th>
                                    <th>
                                        COLOR
                                    </th>
                                    <th>
                                        MEDIDA (Plancha)
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>
                                        Amazonas
                                    </td>
                                    <td>
                                        transparente/turqueza/salmón
                                    </td>
                                    <td>
                                        1.20 x 1.80 / 0.80 x 1.80
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Arabesco
                                    </td>
                                    <td>
                                        transparente/turqueza/salmón
                                    </td>
                                    <td>
                                        1.20 x 1.80 / 0.80 x 1.80
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bambú
                                    </td>
                                    <td>
                                        transparente/turqueza/salmón
                                    </td>
                                    <td>
                                        1.20 x 1.80 / 0.80 x 1.80
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Delfín
                                    </td>
                                    <td>
                                        transparente/turqueza/salmón
                                    </td>
                                    <td>
                                        1.20 x 1.80 / 0.80 x 1.80
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Esmiralado
                                    </td>
                                    <td>
                                        transparente/turqueza/salmón
                                    </td>
                                    <td>
                                        1.20 x 1.80 / 0.80 x 1.80
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Gaviota
                                    </td>
                                    <td>
                                        transparente/turqueza/salmón
                                    </td>
                                    <td>
                                        1.20 x 1.80 / 0.80 x 1.80
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
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/acrilicos/amazonas.png')}}" title="Acrílico amazonas">
                                <img class="img-fluid" src="{{asset('img/acrilicos/amazonas.jpg')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/acrilicos/arabesco.png')}}" title="Acrílico arabesco">
                                <img class="img-fluid" src="{{asset('img/acrilicos/arabesco.jpg')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/acrilicos/bambu.png')}}" title="Acrílico bambú">
                                <img class="img-fluid" src="{{asset('img/acrilicos/bambu.jpg')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/acrilicos/delfin.png')}}" title="Acrílico delfín">
                                <img class="img-fluid" src="{{asset('img/acrilicos/delfin.jpg')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/acrilicos/esmerilado.png')}}" title="Acrílico esmerilado">
                                <img class="img-fluid" src="{{asset('img/acrilicos/esmerilado.jpg')}}" width="150" height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="{{asset('img/acrilicos/gaviota.png')}}" title="Acrílico esmerilado">
                                <img class="img-fluid" src="{{asset('img/acrilicos/gaviota.jpg')}}" width="150" height="130" alt="Project">
                            </a>
                        </div>
                    </div>
                </div>

                <!--	<a href="#" target="_blank">
                    <img alt="Porto" class="img-fluid" src="img/ofertas/oferta-lateral-1.png">
                </a>-->

            </div>
            <div class="col-lg-3 ">
                <aside class="sidebar ">
                    <ul class="nav nav-list flex-column mb-3">
                        <li class="nav-item"><a class="nav-link active" href="/productos/acrilico">ACRÍLICOS</a>
                        </li>
                        <li class="nav-item"><a class="nav-link " href="/productos/aluminio/serie">ALUMINIO</a>
                        </li>
                        <li class="nav-item"><a class="nav-link " href="/productos/policarbonato">POLICARBONATO</a></li>
                        <li class="nav-item"><a class="nav-link" href="/productos/vidrios/laminado">VIDRIO</a>
                        </li>
                    </ul>
                </aside>

                <div class="toggle toggle-primary" data-plugin-toggle="">
                    <section class="toggle active">
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