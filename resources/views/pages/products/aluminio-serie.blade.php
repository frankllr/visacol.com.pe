@extends('pages.productos')
@section('product')
    
<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/bg-vidrio.png')}});">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 align-self-center p-static order-2 text-center ">
                    <h1 class="text-dark"> <strong>SERIES DE ALUMINIO</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light  d-block text-center">
                        <li><a class="text-dark" href="#">Inicio</a></li>
                        <li class="text-dark ">Productos</li>
                        <li class="text-dark active">Aluminio</li>
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
                        <h2 class="font-weight-bold text-tech">SERIES DE ALUMINIO</h2>
                        <p class="text-justify mt-2">
                            VISACOL presenta las series de carpintería en aluminio: 20, 25, 3825, 3831, 35, 42, 45, 28, 29, 7038 y 80. Las series de carpintería de aluminio VISACOL es una opción PREMIUM, material que le permite a usted armar ventanas corredizas, mamparas corredizas,
                            muro continas, ventanas proyectantes, puertas batientes y más.
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                                <tr class="info text-center">
                                    <th>
                                        SERIE
                                    </th>
                                    <th>
                                        MODELO
                                    </th>
                                    <th>
                                        COLORES DISPONIBLES
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>
                                        Serie 3825
                                    </td>
                                    <td>
                                        Ventana Corrediza Económica
                                    </td>
                                    <td>
                                        BLANCO/BRONCE/MATE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Serie 20
                                    </td>
                                    <td>
                                        Ventana corrediza
                                    </td>
                                    <td>
                                        NEGRO/BLANCO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Serie 25
                                    </td>
                                    <td>
                                        Mampara y/o ventana corrediza
                                    </td>
                                    <td>
                                        BLANCO/MTE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Serie PC 7038
                                    </td>
                                    <td>
                                        Mampara corrediza
                                    </td>
                                    <td>
                                        NEGRO/BLANCO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Serie 3831
                                    </td>
                                    <td>
                                        Ventana económica proyectante
                                    </td>
                                    <td>
                                        MATE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Serie 42
                                    </td>
                                    <td>
                                        Ventana proyectante
                                    </td>
                                    <td>
                                        MATE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Serie VG 6033
                                    </td>
                                    <td>
                                        Ventana guillotina
                                    </td>
                                    <td>
                                        MATE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Serie 35
                                    </td>
                                    <td>
                                        Puerta y/o ventana batiente
                                    </td>
                                    <td>
                                        MATE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Serie 4510
                                    </td>
                                    <td>
                                        Sistema muro cortina
                                    </td>
                                    <td>
                                        MATE
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <spam class="text-2 text-color-dark">*Información referencial (Variable).</spam>
                    </div>

                </div>

            </div>

            <div class="col-lg-3 ">

                <aside class="sidebar ">
                    <ul class="nav nav-list flex-column mb-3">
                        <li class="nav-item"><a class="nav-link " href="/productos/acrilico">ACRÍLICOS</a>
                        </li>
                        <li class="nav-item"><a class="nav-link active " href="#">ALUMINIO</a>
                            <ul>
                                <li class="nav-item"><a class="nav-link active" href="/productos/aluminio/serie">SERIES
                                        DE ALUMINIO</a></li>
                                <li class="nav-item"><a class="nav-link" href="/productos/aluminio/perfil">PERFILES
                                        DE ALUMINIO</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link " href="/productos/policarbonato">POLICARBONATO</a></li>
                        <li class="nav-item"><a class="nav-link" href="/productos/vidrios/laminado">VIDRIO</a>

                        </li>
                    </ul>
                </aside>

                <a class="lightbox mb-2" href="{{asset('img/ofertas/oferta-lateral.png')}}" data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" src="{{asset('img/ofertas/oferta-lateral.png')}}" alt="Project Image">
                </a>

            </div>

        </div>

    </div>

    <!--<div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
                    <ul class="nav nav-tabs col-sm-3">
                        <li class="nav-item active">
                            <a class="nav-link" href="#tabsNavigationVertSimple1" data-toggle="tab">SERIE 4510 - VENTANA CORREDIZA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabsNavigationVertSimple2" data-toggle="tab">SERIE 20 - VENTANA CORREDIZA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabsNavigationVertSimple3" data-toggle="tab">SERIE 25 - VENTANA Y/O MAMPARA CORREDIZA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabsNavigationVertSimple4" data-toggle="tab">SERIE PC 7038 - MAMPARA CORREDIZA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabsNavigationVertSimple5" data-toggle="tab">SERIE 3831 - VENTANA ECONÓMICA PROYECTANTE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabsNavigationVertSimple5" data-toggle="tab">SERIE 42 - VENTANA PROYECTANTE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabsNavigationVertSimple5" data-toggle="tab">SERIE VG 6033 - VENTANA GUILLOTINA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabsNavigationVertSimple5" data-toggle="tab">SERIE 335 - PUERTA Y/O VENTANA BATIENTE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabsNavigationVertSimple5" data-toggle="tab">SERIE 4510 - SISTEMA MURO CORTINA</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-pane tab-pane-navigation active" id="tabsNavigationVertSimple1">
                    <h4>Customer Support</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
                </div>
                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple2">
                    <h4>HTML5 / CSS3 / JS</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
                </div>
                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple3">
                    <h4>500+ Google Fonts</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
                    <img class="float-left" width="200" src="img/device.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
                </div>
                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple4">
                    <h4>Colors</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
                </div>
                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple5">
                    <h4>Sliders</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
                </div>
            </div>
        </div>
    </div>-->

    <div class="container py-5">

        <div class="row">
            <div class="col-lg-3">

                <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

                    <h5 class="font-weight-bold">CATEGORÍAS</h5>
                    <ul class="nav nav-list flex-column mb-5">
                        <li class="nav-item"><a class="nav-link " data-hash data-hash-offset="95" href="#3825">SERIE 3825</a></li>
                        <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="95" href="#20">SERIE 20</a> </li>
                        <li class="nav-item"><a class="nav-link " data-hash data-hash-offset="95" href="#25">SERIE 25</a></li>
                        <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="95" href="#7038">SERIE PC 7038</a></li>
                        <li class="nav-item "><a class="nav-link" data-hash data-hash-offset="95" href="#3831">SERIE 3831</a> </li>
                        <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="95" href="#42">SERIE 42</a></li>
                        <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="95" href="#6033">SERIE VG 6033</a></li>
                        <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="95" href="#35">SERIE 35</a> </li>
                        <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="95" href="#4510">SERIE 4510</a></li>
                    </ul>

                </aside>

            </div>
            <div class="col-lg-9">

                <h2 class="font-weight-extra-normal text-vs-1 text-7  mb-2" id="3825"><strong class="font-weight-extra-bold text-vs-1">Serie 3825 / </strong>Ventana Corrediza Económica
                </h2>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="owl-carousel owl-theme dots-inside float-left " data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 
                            'animateIn': 'slideInRight', 'animateOut': 'slideOutLeft'}">
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-3825.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-3825.png')}}">
                                </a>
                            </div>
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-3825a.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-3825a.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4>BENEFICIOS</h4>
                        <ul class="text-dark">
                            <li>Bersátil, puede fabricarse con sistemas de riel doble para ventanas doble corredija y ventanas fijo corrediza. </li>
                            <li>Efectivo desalojo de agua, puede utilizarse sillares con perfiles alfajía incorporada.
                            </li>
                            <li>Deslizamiento silencioso. Son Estéticas.</li>
                            <li>Hermética por su sistema de felpas.</li>
                            <li>Resistente, poseen perfiles tubulares en las naves. </li>
                            <li>No se corroen, mínimo mantenimiento.</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <h2 class="font-weight-extra-normal text-vs-1 text-7 mb-2" id="20"><strong class="font-weight-extra-bold text-vi">Serie 20 / </strong>Ventana Corrediza</h2>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="owl-carousel owl-theme dots-inside float-left " data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 
                                    'animateIn': 'slideInRight', 'animateOut': 'slideOutLeft'}">
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-20.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-20.png')}}">
                                </a>
                            </div>
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-20a.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-20a.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4>BENEFICIOS</h4>
                        <ul class="text-dark">
                            <li>Efectivo desalojo de agua, puede utilizarse sillares con perfiles alfajía.</li>
                            <li>Deslizamiento silencioso. Son Estéticas.</li>
                            <li>Hermética por su sistema de felpas.</li>
                            <li>Resistente, poseen perfiles tubulares en las naves. </li>
                            <li>No se corroen, mínimo mantenimiento.</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <h2 class="font-weight-extra-normal text-vs-1 text-7 mb-2" id="25"><strong class="font-weight-extra-bold">Serie 25 / </strong>Mampara y/o Ventana Corrediza</h2>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="owl-carousel owl-theme dots-inside float-left " data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 
                                            'animateIn': 'slideInRight', 'animateOut': 'slideOutLeft'}">
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-25.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-25.png')}}">
                                </a>
                            </div>
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-25a.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-25a.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4>BENEFICIOS</h4>
                        <ul class="text-dark">
                            <li>Efectivo desalojo de agua, puede utilizarse sillares con perfiles alfajía.</li>
                            <li>Deslizamiento silencioso. Son Estéticas.</li>
                            <li>Hermética por su sistema de felpas.</li>
                            <li>Resistente, poseen perfiles tubulares en las naves. </li>
                            <li>No se corroen, mínimo mantenimiento.</li>
                            <li>Aceptan cristales monolíticos y laminados.</li>
                            <li>Permiten perfiles de decoración "cuadrícula".</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <h2 class="font-weight-extra-normal text-vs-1 text-7 mb-2" id="7038"><strong class="font-weight-extra-bold">Serie PC 7038 / </strong>Mampara Corrediza</h2>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="owl-carousel owl-theme dots-inside float-left " data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 
                                                    'animateIn': 'slideInRight', 'animateOut': 'slideOutLeft'}">
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-7038.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-7038.png')}}">
                                </a>
                            </div>
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-7038a.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="rounded" src="{{asset('img/series/serie-7038a.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4>BENEFICIOS</h4>
                        <ul class="text-dark">
                            <li>Deslizamiento silencioso. Son Estéticas.</li>
                            <li>Hermética por su sistema de felpas.</li>
                            <li>Resistente, poseen perfiles tubulares en las naves. </li>
                            <li>No se corroen, mínimo mantenimiento.</li>
                            <li>Aceptan cristales monolíticos, laminados de 6mm con burlete y 8mm con silicona.
                            </li>
                            <li>Permiten perfiles de decoración "cuadrícula".</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <h2 class="font-weight-extra-normal text-vs-1 text-7 mb-2" id="3831"><strong class="font-weight-extra-bold">Serie 3831 / </strong>Ventana Económica Proyectante</h2>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="owl-carousel owl-theme dots-inside float-left " data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 
                                                    'animateIn': 'slideInRight', 'animateOut': 'slideOutLeft'}">
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-3831.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-3831.png')}}">
                                </a>
                            </div>
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-3831a.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-3831a.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4>BENEFICIOS</h4>
                        <ul class="text-dark">
                            <li>Excelente coeficiente acústico, gracias a su cerramiento de doble contácto.</li>
                            <li>amplia gama de junquillos que permite diferentes espesores de cristales monolíticos y laminados.</li>
                            <li>Permite combinar cuerpos fijos y móviles gracias a la versatilidad de los perfiles que la componen.</li>
                            <li>Hermética.</li>
                            <li>Resistente, poseen perfiles tubulares en las naves. </li>
                            <li>No se corroen, mínimo mantenimiento.</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <h2 class="font-weight-extra-normal text-vs-1 text-7 mb-2" id="42"><strong class="font-weight-extra-bold">Serie 42 / </strong> Ventana Proyectante</h2>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="owl-carousel owl-theme dots-inside float-left " data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 
                                                            'animateIn': 'slideInRight', 'animateOut': 'slideOutLeft'}">
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-42.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-42.png')}}">
                                </a>
                            </div>
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-42a.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-42a.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4>BENEFICIOS</h4>
                        <ul class="text-dark">
                            <li>Sistema proyectante clásico. Hermético.</li>
                            <li>Excelente coeficiente acústico, gracias a su cerramiento de doble contácto, el cual mejora al emplearse cristal laminado.</li>
                            <li>Permite vidrios monolíticos, laminados y termopaneles.</li>
                            <li>Permite combinaar paños fijos y móviles gracias a la verstilidad de los perfiles que componen esta serie.</li>
                            <li>Resistente, poseen perfiles tubulares en las naves. </li>
                            <li>No se corroen, mínimo mantenimiento.</li>
                            <li>Evacuación de agua por perfiles de "cámara de agua" a pedido.*</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <h2 class="font-weight-extra-normal text-vs-1 text-7 mb-2" id="6033"><strong class="font-weight-extra-bold">Serie VG 6033 / </strong> Ventana Guillotina</h2>

                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="owl-carousel owl-theme dots-inside float-left " data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 
                                                                    'animateIn': 'slideInRight', 'animateOut': 'slideOutLeft'}">
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-6033.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-6033.png')}}">
                                </a>
                            </div>
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-6033a.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-6033a.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4>BENEFICIOS</h4>
                        <ul class="text-dark">
                            <li>Deslizamiento silencioso.</li>
                            <li>Modelo novedoso y estético.</li>
                            <li>Permite vidrios monolíticos, laminados y termopaneles.</li>
                            <li>Permite combinaar paños fijos y móviles gracias a la verstilidad de los perfiles que componen esta serie.</li>
                            <li>Resistente, poseen perfiles tubulares en las naves. </li>
                            <li>No se corroen, mínimo mantenimiento.</li>
                            <li>Evacuación de agua por perfiles de "cámara de agua" a pedido.*</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <h2 class="font-weight-extra-normal text-vs-1 text-7 mb-2" id="35"><strong class="font-weight-extra-bold">Serie 35 / </strong> Puerta y/o ventana batiente</h2>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="owl-carousel owl-theme dots-inside float-left " data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 
                                                                    'animateIn': 'slideInRight', 'animateOut': 'slideOutLeft'}">
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-35.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-35.png')}}">
                                </a>
                            </div>
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-35a.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-35a.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4>BENEFICIOS</h4>
                        <ul class="text-dark">
                            <li>Versátil, por los diferentes perfiles que lleva, permitiendo diferentes diseños.
                            </li>
                            <li>Operació silecniosa. Son estéticas.</li>
                            <li>Hermética por su sistema de felpas.</li>
                            <li>Resistente, poseen perfiles tubulares en las naves. </li>
                            <li>No se corroen, mínimo mantenimiento.</li>
                            <li>Permite vidrios monolíticos y laminados de hasta 8mm.</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <h2 class="font-weight-extra-normal text-vs-1 text-7 mb-2" id="4510"><strong class="font-weight-extra-bold">Serie 4510 / </strong>Sistema Muro Cortina</h2>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="owl-carousel owl-theme dots-inside float-left " data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 
                                                                            'animateIn': 'slideInRight', 'animateOut': 'slideOutLeft'}">
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-4510.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-4510.png')}}">
                                </a>
                            </div>
                            <div>
                                <a class="lightbox" href="{{asset('img/series/serie-4510a.png')}}" data-plugin-options="{'type':'image'}">
                                    <img alt="" class="img-fluid rounded" src="{{asset('img/series/serie-4510a.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4>BENEFICIOS</h4>
                        <ul class="text-dark">
                            <li>Sistema del muro cortina stick orientada a edificaciones de hasta 30 pisos de altura.
                            </li>
                            <li>Se puede utilizar cristales desde 4mm hasta 26mm</li>
                            <li>Esta serie permite 2 alternativas de fachada.</li>
                            <li>Succión mecánica, cristal fijado mecánicamente en todo su perímetro.</li>
                            <li>Pegado con silicona estructural, lo que proporciona mayor seguridad. </li>
                            <li>Permite incorporar ventanas proyectantes de serie 42.</li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @include('shared.cotiza')

</div>

@endsection