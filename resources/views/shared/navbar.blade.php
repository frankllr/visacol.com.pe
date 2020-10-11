<header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-vsmenu ">
        <div class="header-top header-top-borders bg-visacol-1">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders">
                                        <a class=" text-color-light pl-0">
                                            <i class="far fa-dot-circle text-4" style="top: 1px;"></i> #1098
                                            Alfonso Ugarte, Chiclayo
                                        </a>
                                    </li>
                                    <li class="nav-item nav-item-borders  d-none d-lg-inline-flex">
                                        <a class=" text-color-light" href="tel:+51922290905">
                                            <i class="fab fa-whatsapp text-4 " style="top: 0;"></i> 922 290 905
                                            - (074) 227693
                                        </a>
                                    </li>
                                    <li class="nav-item nav-item-borders  d-none d-lg-inline-flex">
                                        <a class=" text-color-light" href="mailto:informes@visacol.com.pe">
                                            <i class="far fa-envelope text-4 " style="top: 0;"></i>
                                            informes@visacol.com.pe
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders  d-none d-lg-inline-flex">
                                        <a class="text-color-light" href="tel:123-456-7890">
                                            Aceptamos
                                        </a>
                                        <img src="{{asset('img/panel/tarjetas.png')}}" class="tjvisacol">
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="Porto" width="210" height="60" data-sticky-width="160" data-sticky-height="45" src="{{asset('img/panel/visacol-logo-1.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown dropdown-full-color dropdown-dark">
                                            <a class="dropdown-item @if(request()->is('/')) active-header @endif" href="/">
                                                INICIO
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-full-color dropdown-dark">
                                            <a class="dropdown-item @if(request()->is('nosotros')) active-header @endif" href="/nosotros">
                                                NOSOTROS
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-reverse dropdown-full-color dropdown-dark">
                                            <a class="dropdown-item dropdown-toggle 
                                                @if(request()->is('productos','productos/acrilico','productos/aluminio/serie',
                                                                    'productos/aluminio/perfil','productos/policarbonato',
                                                                    'productos/vidrios/laminado','productos/vidrios/incoloro',
                                                                    'productos/vidrios/coloro','productos/vidrios/reflejante',
                                                                    'productos/vidrios/catedral','productos/vidrios/espejo')) 
                                                    active-header 
                                                @endif">
                                                PRODUCTOS
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="/productos/acrilico">
                                                        Acrílicos
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu dropdown-reverse">
                                                    <a class="dropdown-item" href="#">
                                                        Aluminio
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="/productos/aluminio/serie">
                                                                Series de aluminio
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="/productos/aluminio/perfil">
                                                                Perfiles de aluminio
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item" href="/productos/policarbonato">
                                                        Policarbonato
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu dropdown-reverse">
                                                    <a class="dropdown-item" href="#">Vidrios</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="/productos/vidrios/laminado">
                                                                Vidrio Laminado
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="/productos/vidrios/incoloro">
                                                                Vidrio Incoloro
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="/productos/vidrios/coloro">
                                                                Vidrio Coloro
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="/productos/vidrios/reflejante">
                                                                Vidrio Reflectivo
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="/productos/vidrios/catedral">
                                                                Vidrio Catedral
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="/productos/vidrios/espejo">
                                                                Vidrio Espejo
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/productos">
                                                        Accessorios Generales
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-full-color dropdown-dark">
                                            <a class="dropdown-item  @if(request()->is('servicios')) active-header @endif" href="/servicios">
                                                SERVICIOS
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-full-color dropdown-dark">
                                            <a class="dropdown-item  @if(request()->is('locales')) active-header @endif" href="/locales">
                                                LOCALES
                                            </a>
                                        </li>

                                        <li class="dropdown dropdown-full-color dropdown-dark">
                                            <a class="dropdown-item  @if(request()->is('contactanos')) active-header @endif" href="/contactanos">
                                                CONTÁCTANOS
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle" data-focus="headerSearch">
                                    <i class="fas fa-search header-nav-top-icon"></i>
                                </a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
                                    <form role="search" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                            <span class="input-group-append">
                                                <button class="btn" type="submit">
                                                    <i class="fa fa-search header-nav-top-icon"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>