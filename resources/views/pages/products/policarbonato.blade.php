@extends('pages/productos')
@section('product')
    
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/bg-vidrio.png')}});">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 align-self-center p-static order-2 text-center ">
                    <h1 class="text-dark">
                        <strong>POLICARBONATO</strong>
                    </h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light  d-block text-center">
                        <li>
                            <a class="text-dark" href="#">
                                Inicio
                            </a>
                        </li>
                        <li class="text-dark active">
                            Productos
                        </li>
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
                        <h2 class="font-weight-bold text-tech">POLICARBONATO</h2>
                        <p class="text-justify mt-2">
                            El policarbonato es un material fácil de trabajar, moldear y termoformar. Es utilizado ampliamente en la manufactura moderna como techos, terrazas, patios, invernaderos, tragaluces, sepa paredes, afiches publicitarios, etc.
                        </p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                                <tr class="info text-center">
                                    <th>
                                        COLOR DISPONIBLE
                                    </th>
                                    <th>
                                        MEDIDA - PLANCHA (mts)
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td> Transparente </td>
                                    <td> 2.10 x 5.80 </td>
                                </tr>
                                <tr>
                                    <td> Lechozo </td>
                                    <td> 2.10 x 5.80 </td>
                                </tr>
                                <tr>
                                    <td> Azul </td>
                                    <td> 2.10 x 5.80 </td>
                                </tr>
                                <tr>
                                    <td> Turqueza </td>
                                    <td> 2.10 x 5.80 </td>
                                </tr>
                                <tr>
                                    <td> Rojos </td>
                                    <td> 2.10 x 5.80 </td>
                                </tr>
                                <tr>
                                    <td> Bronce </td>
                                    <td> 2.10 x 5.80 </td>
                                </tr>
                                <tr>
                                    <td> Gris </td>
                                    <td> 2.10 x 5.80 </td>
                                </tr>
                                <tr>
                                    <td> Verde </td>
                                    <td> 2.10 x 5.80 </td>
                                </tr>
                                <tr>
                                    <td> Naranja </td>
                                    <td> 2.10 x 5.80 </td>
                                </tr>
                            </tbody>
                        </table>
                        <span class="text-2 text-color-dark">
                            *Información referencial (Variable).
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="text-color-dark text-center font-weight-normal text-4 mb-2 ">
                            <strong class="font-weight-extra-bold">
                                COLORES Y ACCESORIOS
                            </strong>
                        </h2>

                        <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                            <li class="nav-item active" data-option-value="*">
                                <a class="nav-link text-1 text-uppercase active" href="#">
                                    TODOS
                                </a>
                            </li>
                            <li class="nav-item" data-option-value=".color">
                                <a class="nav-link text-1 text-uppercase" href="#">
                                    COLORES
                                </a>
                            </li>
                            <li class="nav-item" data-option-value=".acces">
                                <a class="nav-link text-1 text-uppercase" href="#">
                                    ACCESORIOS
                                </a>
                            </li>
                        </ul>
                        <div class="sort-destination-loader mt-4 pt-2 sort-destination-loader-loaded">
                            <div class="row portfolio-list sort-destination" data-sort-id="portfolio" data-filter="*" style="position: relative; height: 290px;">
                                <div class="col-sm-6 col-lg-3 isotope-item color" style="position: absolute; left: 0px; top: 0px;">
                                    <h5 class="text-uppercase mt-4">GRIS TRANSPARENTE</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-gris-transparente.png')}}" data-plugin-options="{'type':'image'}">
                                        <img class="img-fluid" src="{{asset('img/policarbonato/color-gris-transparente.png')}}" alt="Project Image">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item color" style="position: absolute; left: 284.984px; top: 0px;">
                                    <h5 class="text-uppercase mt-4">GRIS REFLECTIVO</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="{{asset('img/policarbonato/color-gris-reflectivo.png')}}" data-plugin-options="{'type':'image'}">
                                        <img class="img-fluid" src="{{asset('img/policarbonato/color-gris-reflectivo.png')}}" alt="Project Image">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item color" style="position: absolute; left: 569.968px; top: 0px;">
                                    <h5 class="text-uppercase mt-4">TRANSPARENTE</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borde" href="{{asset('img/policarbonato/color-transparente.png')}}" data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/color-transparente.png')}}" alt="Project Image">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item  color" style="position: absolute; left: 0px; top: 362.984px;">
                                    <h5 class="text-uppercase mt-4">LECHOZO</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href=" {{asset('img/policarbonato/color-lechozo.png')}} " data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/color-lechozo.png')}}" alt="Project Image ">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item color " style="position: absolute; left: 284.984px; top: 362.984p ">
                                    <h5 class="text-uppercase mt-4 ">BRONCE</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox " href="{{asset('img/policarbonato/color-bronce.png')}} " data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/color-bronce.png')}} " alt="Project Image ">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item color " style="position: absolute; left: 569.968px; top: 362.984px; ">
                                    <h5 class="text-uppercase mt-4 ">AZUL</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox " href="{{asset('img/policarbonato/color-azul.png')}} " data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/color-azul.png')}} " alt="Project Image ">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item color " style="position: absolute; left: 0px; top: 725.968px; ">
                                    <h5 class="text-uppercase mt-4 ">TURQUEZA</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox " href="{{asset('img/policarbonato/color-turqueza.png')}} " data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/color-turqueza.png')}} " alt="Project Image ">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item color " style="position: absolute; left: 284.984px; top: 725.968px; ">
                                    <h5 class="text-uppercase mt-4 ">VERDE</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox " href="{{asset('img/policarbonato/color-verde.png')}} " data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/color-verde.png')}} " alt="Project Image ">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item color " style="position: absolute; left: 569.968px; top: 725.968px; ">
                                    <h5 class="text-uppercase mt-4 ">ROJO</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox " href="{{asset('img/policarbonato/color-rojo.png')}} " data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/color-rojo.png')}} " alt="Project Image ">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item color " style="position: absolute; left: 569.968px; top: 725.968px; ">
                                    <h5 class="text-uppercase mt-4 ">NARANJA</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox " href="{{asset('img/policarbonato/color-naranja.png')}} " data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/color-naranja.png')}} " alt="Project Image ">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item color " style="position: absolute; left: 569.968px; top: 725.968px; ">
                                    <h5 class="text-uppercase mt-4 ">AMARILLO</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox " href="{{asset('img/policarbonato/color-amarillo.png')}} " data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/color-amarillo.png')}} " alt="Project Image ">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item acces " style="position: absolute; left: 569.968px; top: 725.968px; ">
                                    <h5 class="text-uppercase mt-4 ">CONECTOR BASE Y TAPA</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox " href="{{asset('img/policarbonato/conec-base-tapa1.png')}} " data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/conec-base-tapa1.jpg')}} " alt="Project Image ">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item acces " style="position: absolute; left: 569.968px; top: 725.968px; ">
                                    <h5 class="text-uppercase mt-4 ">C.BASE Y TAPA ALUMINIO</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href=" {{asset('img/policarbonato/conec-base-tapa-alu1.jpg')}} " data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/conec-base-tapa-alu1.jpg')}} " alt="Project Image ">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item acces " style="position: absolute; left: 569.968px; top: 725.968px; ">
                                    <h5 class="text-uppercase mt-4 ">CONECTOR H</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox " href="{{asset('img/policarbonato/conec-h1.jpg')}} " data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/conec-h1.jpg')}} " alt="Project Image ">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 isotope-item acces " style="position: absolute; left: 569.968px; top: 725.968px; ">
                                    <h5 class="text-uppercase mt-4 ">CONECTOR TERMINAL</h5>
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox " href="{{asset('img/policarbonato/conec-terminal1.jpg')}} " data-plugin-options="{ 'type': 'image'} ">
                                        <img class="img-fluid " src="{{asset('img/policarbonato/conec-terminal1.jpg')}} " alt="Project Image ">
                                    </a>
                                </div>
                            </div>
                            <div class="bounce-loader ">
                                <div class="bounce1 "></div>
                                <div class="bounce2 "></div>
                                <div class="bounce3 "></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <aside class="sidebar ">
                    <ul class="nav nav-list flex-column mb-3 ">
                        <li class="nav-item ">
                            <a class="nav-link " href="/productos/acrilico">ACRÍLICOS</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="/productos/aluminio/serie">ALUMINIO</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active " href="/productos/policarbonato">POLICARBONATO</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="/productos/vidrios/laminado">VIDRIO</a>
                        </li>
                    </ul>
                </aside>
                <div class="toggle toggle-primary " data-plugin-toggle=" ">
                    <section class="toggle active ">
                        <label> CARACTERÍSTICAS </label>
                        <div class="toggle-content " style="display: none; ">
                            <ul class="list list-icons list-primary list-borders text-2 ">
                                <li>
                                    <i class="fas fa-caret-right left-10 "></i>
                                    <strong class="text-tech ">Translúcido:</strong>
                                    <a class="text-dark ">
                                        Permite el paso de la luz, reduciendo los costos de iluminación.
                                    </a>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right left-10 "></i>
                                    <strong class="text-tech ">Resistencia a la temperatura:</strong>
                                    <a class="text-dark "> Mantiene estabilidad de forma ante -40°C + 120°C.</a>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right left-10 "></i>
                                    <strong class="text-tech ">Ultraliviano:</strong>
                                    <a class="text-dark "> Permite el fácil transporte e instalación.</a>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right left-10 "></i>
                                    <strong class="text-tech ">Flexible:</strong>
                                    <a class="text-dark ">Permite el doblado o curvado en frío.</a>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right left-10 "></i>
                                    <strong class="text-tech ">Protección UV:</strong>
                                    <a class="text-dark "> Controla los rayos ultravioletas.</a>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right left-10 "></i>
                                    <strong class="text-tech ">Resistente:</strong>
                                    <a class="text-dark "> 200 veces mayor que el vidrio y 8 veces mayor que el acrílico.</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <h2 class="text-color-dark font-weight-normal text-4 mb-2 mt-4 ">
                    <strong class="font-weight-extra-bold ">PRUEBA DE RESISTENCIA</strong>
                </h2>
                <div class=" appear-animation animated fadeInLeftShorter appear-animation-visible mt-4 " data-appear-animation="fadeInLeftShorter " data-appear-animation-delay="800 " style="animation-delay: 800ms; ">
                    <div class="featured-boxes featured-boxes-modern-style-1 ">
                        <div class="featured-box overlay overlay-show overlay-op-7 py-3 " style="height: 100px; ">
                            <div class="featured-box-background " style="background-image: url({{asset('img/policarbonato/resistencia.png')}}); background-size: cover; background-position: center; ">
                            </div>
                            <div class="box-content px-lg-4 px-xl-5 py-lg-5 m-5 ">
                                <a class="text-decoration-none lightbox " href="{{asset('video/prueba-calidad.mp4')}}" data-plugin-options="{ 'type': 'iframe'} ">
                                    <i class="fas fa-play featured-icon featured-icon-style-2 featured-icon-hover-effect-1 bg-primary right-4 top-0 m-0 "></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <a class="lightbox mb-2 mt-3 " href="{{asset('img/ofertas/oferta-lateral-2.png')}} " data-plugin-options="{ 'type': 'image'} ">
                    <img class="img-fluid " src="{{asset('img/ofertas/oferta-lateral-2.png')}} " alt="Project Image ">
                </a>
            </div>
        </div>
    </div>
    @include('shared.cotiza')
</div>

@endsection