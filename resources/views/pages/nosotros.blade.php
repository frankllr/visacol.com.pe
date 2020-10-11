@extends('welcome')
@section('contenido')
    
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url({{asset('img/panel/nosotros-2.png')}});">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1><strong>SOBRE NOSOTROS</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Inicio</a></li>
                        <li class=" active">Nosotros</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-default bg-light border-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750" style="background-image: url(&quot;{{asset('img/panel/fondo-nosotros.png')}}&quot;); 
        background-size: cover; background-position: center center; animation-delay: 100ms;">
        <div class="container py-2">
            <div class="col-md-8">
                <div class="overflow-hidden mb-2">
                    <h1 class="text-color-dark font-weight-normal mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200"><strong class="font-weight-extra-bold text-vs-1">Nuestra Historia de Éxito</strong></h1>
                </div>
                <p class="mb-0 appear-animation text-justify" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                    VISACOL, nace como una idea de emprendimiento, sus fundadores son el matrominio Huamán J. quienes en la década de los 80 llegaron a la ciudad de Chiclayo en busca de mejores oportunidades de trabajo. Ya con algunos conocimientos
                    en el rubro de la vidriería, empezaron con un pequeño negocio. Su objetivo era muy claro ser la empresa más importante en todo el rubro de vidrios, aluminios y acabados del norte.

                    <p class="mb-0 appear-animation text-justify" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">Es así como esta familia emprendedora se dedicó por completo a su trabajo y fue adquiriendo la experiencia necesaria para su éxito empresarial. Lo más importante para ellos siempre fue servir con lealtad y efectividad a cada
                        uno de sus clientes, superando siempre sus expectativas, valores que siguen siendo el sustento de la filosofía corporativa actual.
                    </p>

                    <p class="mb-0 appear-animation text-justify" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Después de algunos años de gran esfuerzo, el 01 de marzo de 1991 se funda "Vidriería Sarita Colonia - VISACOL S.R.L." con su propio local comercial, ubicado en una zona céntrica de Chiclayo. Un pequeño negocio que, con los
                        años, se convirtió en una de las mejores empresas del rubro de la vidriería.</p>

            </div>
            <div class="row align-items-center">
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row mt-5 py-3">
            <div class="col-md-6">
                <div class="toggle toggle-primary toggle-simple m-0" data-plugin-toggle>
                    <section class="toggle active ">
                        <label>Nuestra <strong>Misión</strong></label>
                        <div class="toggle-content">
                            <p>Nuestra misión es brindar una amplia gama de productos en vidrios, aluminio y bienes de calidad que estén al alcance de sus clientes, satisfaciendo sus necesidades en un entorno de constante desarrollo humano e industrial.</p>
                        </div>
                    </section>
                    <section class="toggle">
                        <label>Nuestra <strong>Visión</strong></label>
                        <div class="toggle-content">
                            <p>Ser ampliamente reconocidos en el mercado regional y nacional por la amplia gama y calidad de productos que ofrecemos en el rubro de la vidriería, aluminios y acabados.</p>
                        </div>
                    </section>

                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="progress-bars">
                    <div class="progress-label">
                        <span class="text-2 text-dark">CALIDAD DE PRODUCTOS Y SERVICIOS</span>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%">
                            <span class="progress-bar-tooltip">100%</span>
                        </div>
                    </div>
                    <div class="progress-label">
                        <span class="text-2 text-dark">RESPONSABILIDAD</span>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%" data-appear-animation-delay="300">
                            <span class="progress-bar-tooltip">100%</span>
                        </div>
                    </div>
                    <div class="progress-label">
                        <span class="text-2 text-dark">PROFESIONALISMO</span>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%" data-appear-animation-delay="600">
                            <span class="progress-bar-tooltip">100%</span>
                        </div>
                    </div>
                    <div class="progress-label">
                        <span class="text-2 text-dark">COLABORACIÓN</span>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%" data-appear-animation-delay="900">
                            <span class="progress-bar-tooltip">100%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>

@endsection