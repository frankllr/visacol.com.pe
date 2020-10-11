@extends('pages.productos')
@section('product')
    
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/bg-vidrio.png')}});">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 align-self-center p-static order-2 text-center ">
                    <h1 class="text-dark"> <strong>PERFILES DE ALUMINIO</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light  d-block text-center">
                        <li><a class="text-dark" href="#">Inicio</a></li>
                        <li class="text-dark">Productos</li>
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
                    <a href="{{asset('documentos/perfil-aluminio.pdf')}}" download="PerfilesDeAluminio" target="_blank">
                        <img src="{{asset('img/ofertas/anuncio-perfiles.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                    </a>

                </div>
            </div>
            <div class="col-lg-3 ">

                <aside class="sidebar ">
                    <ul class="nav nav-list flex-column mb-3">
                        <li class="nav-item"><a class="nav-link " href="/productos/acrilico">ACRÍLICOS</a>
                        </li>
                        <li class="nav-item"><a class="nav-link active " href="#">ALUMINIO</a>
                            <ul>
                                <li class="nav-item"><a class="nav-link " href="/productos/aluminio/serie">SERIES
                                        DE ALUMINIO</a></li>
                                <li class="nav-item"><a class="nav-link active" href="/productos/aluminio/perfil">PERFILES
                                        DE ALUMINIO</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link " href="productos/policarbonato">POLICARBONATO</a></li>
                        <li class="nav-item"><a class="nav-link" href="productos/vidrios/laminado">VIDRIO</a>

                        </li>
                    </ul>
                </aside>

            </div>

        </div>

    </div>

    @include('shared.cotiza')
</div>

@endsection