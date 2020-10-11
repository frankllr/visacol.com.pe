@extends('pages.productos')
@section('product')
    
<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/bg-vidrio.png')}});">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 align-self-center p-static order-2 text-center ">
                    <h1 class="text-dark"> <strong>VIDRIO INCOLORO</strong></h1>
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
                        <h2 class="font-weight-bold text-tech">VIDRIO INCOLORO</h2>
                        <p class="text-justify mt-2">
                            El vidrio incoloro es plano de alta calidad con apariencia transparente, apto para ser utilizado en fachadas para edificios, diversas aplicaciones en muebles, decoración de interiores y uno de los mas adecuados para el uso residencial.
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
                                        MEDIDA - PLANCHA (mts)
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
                                <tr>
                                    <td>
                                        4 mm
                                    </td>
                                    <td>
                                        183 x 244 / 214 x 330
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        5.5 mm / 6mm / 8mm / 10mm
                                    </td>
                                    <td>
                                        214 x 165 / 214 x 330
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        <spam class="text-2 text-color-dark">*Información referencial (Variable).</spam>
                    </div>

                </div>

                <!--<div class="row mt-3">
                    <div class="col">
                        <div class="lightbox mb-4"
                            data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1"
                                href="img/vidrios/espejo/color-espejo.png" title="VIDRIO ESPEJO 2mm">
                                <img class="img-fluid" src="img/vidrios/espejo/color-espejo.png" width="150"
                                    height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1"
                                href="img/vidrios/espejo/Espejo 3mm.jpg" title="VIDRIO ESPEJO 3mm">
                                <img class="img-fluid" src="img/vidrios/espejo/Espejo 3mm.jpg" width="150"
                                    height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1"
                                href="img/vidrios/espejo/edificio.jpg" title="UTILIZADO EN EDIFICIOS">
                                <img class="img-fluid" src="img/vidrios/espejo/edificio.jpg" width="150"
                                    height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1"
                                href="img/vidrios/espejo/pared.jpeg" title="UTILIZADO EN PARED">
                                <img class="img-fluid" src="img/vidrios/espejo/pared.jpeg" width="150"
                                    height="130" alt="Project">
                            </a>
                            <a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1"
                                href="img/vidrios/espejo/ventana.png" title="UTILIZADO EN VENTANA">
                                <img class="img-fluid" src="img/vidrios/espejo/ventana.png" width="150"
                                    height="130" alt="Project">
                            </a>

                        </div>
                    </div>
                </div>-->

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
                                <li class="nav-item"><a class="nav-link active" href="/productos/vidrios/incoloro">VIDRIO
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
                    <section class="toggle">
                        <label>CARACTERÍSTICAS</label>
                        <div class="toggle-content" style="display: none;">
                            <ul class="list list-icons list-primary list-borders text-2">

                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Luminosidad :</strong><a class="text-dark">
                                        Alta transmisión de luz.</a></li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Estética :</strong><a class="text-dark">
                                        Vidrio perfecto, liso y plano, que no genera distorción óptica.</a>
                                </li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Amoldable :</strong><a class="text-dark">
                                        Especificaciones de tamaño flexible, minimizando la pérdida por
                                        corte.</a></li>
                                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Versátil :</strong><a class="text-dark">
                                        Se emplea para todo tipo de proceso (Laminado, templado, espejo,
                                        serigrafía, tratamientos al ácido).</a></li>
                            </ul>
                        </div>
                    </section>
                </div>
                <!--  <a class="lightbox mb-2" href="img/ofertas/oferta-lateral.png"
                    data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" src="img/ofertas/oferta-lateral.png" alt="Project Image">
                </a>-->

            </div>
        </div>

    </div>

    @include('shared.cotiza')
</div>

@endsection