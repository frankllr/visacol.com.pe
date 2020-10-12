@extends('welcome')
@section('contenido')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51954986955&text=Buenas%20tardes%2C%20quisiera%20mayor%20informaci%C3%B3n%20sobre%20sus%20productos."
    class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
@section('scriptFc')
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v8.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
@endsection

<!-- Your Chat Plugin code -->
<div class="fb-customerchat" attribution=setup_tool page_id="1011528732240951"
    logged_in_greeting="¡Bienvenido! ¿Cómo podemos ayudarte? "
    logged_out_greeting="¡Bienvenido! ¿Cómo podemos ayudarte? ">
</div>

<div role="main" class="main" id="home">

    <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800,
             'responsiveLevels': [4096,1200,992,500]}">
            <ul>
                <li class="slide-overlay-level-8" data-transition="fade">
                    <img src="{{asset('img/panel/fondo-8a.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                    <div class="tp-caption text-color-dark font-weight-normal" data-x="center" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="700" data-fontsize="['26','26','26','40']" data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;">
                        <strong>BIENVENIDOS A VIDRIERIAS</strong>
                    </div>

                    <div class="tp-caption font-weight-extra-bold text-vs-2 negative-ls-1" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-fontsize="['80','80','80','90']" data-lineheight="['55','55','55','95']">
                        SARITA COLONIA
                    </div>

                    <div class="tp-caption font-weight-dark ws-normal text-center" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['60','60','60','105']" data-width="['530','530','530','1100']" data-fontsize="['20','20','20','40']" data-lineheight="['26','26','26','45']" style="color: #000;">
                        Empresa <strong class="text-color-dark">líder</strong> del norte, en el rubro de aluminio, vidrios, policarbonatos y accesorios.
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <div class="home-intro" id="home-intro" style="background-image: url(&quot;{{asset('img/panel/fondo-1.png')}}&quot;); 
    background-size: cover; background-position: center center; animation-delay: 100ms;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    <p class="mb-0 text-color-light">
                        Encuentra todas las herramientas que harán realidad tus ideas en
                        <span class="highlighted-word highlighted-word-animation-1 text-vs-2 font-weight-semibold text-6">
                            VISACOL
                        </span>
                        <span class="text-color-light">
                            Estamos seguros que te gustará trabajar con nosotros y nuestro equipo.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-default border-0 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="500" style="animation-delay: 500ms;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="overflow-hidden mb-2">
                        <h2 class="text-tech font-weight-normal mb-5 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                            ¿POR QUÉ<strong class="font-weight-extra-bold"> ELEGIRNOS?</strong>
                        </h2>
                    </div>
                    <p class="appear-animation text-justify animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                        Porque en VISACOL S.R.L , somos una empresa comprometida, con la satisfacción de nuestros clientes. Buscamos cumplir y superar sus expectativas al brindarles productos y servicios de calidad.
                    </p>
                    <p class="appear-animation text-justify animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                        Somos parte del sector dedicado a la comercialización y distribución de vidrios, aluminios, policarbonato, resinas y acabados. La exigencia, compromiso y profesionalismo en cada uno de nuestros proyectos realizados, respaldan nuestra reputación, como una de las mejores vidrierías del norte.
                    </p>

                </div>
                <div class="col-md-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="450" style="animation-delay: 450ms;">
                    <div class="featured-boxes featured-boxes-modern-style-1">
                        <div class="featured-box  py-3">
                            <div class="featured-box-background" style="background-image: url({{asset('img/panel/presentacion.png')}}); background-size: cover; background-position: center;">
                            </div>
                            <div class="box-content px-lg-4 px-xl-5 py-lg-5 m-5">
                                <a class="text-decoration-none lightbox" href="{{asset('video/visacol-produccion.mp4')}}" data-plugin-options="{'type':'iframe'}">
                                    <i class="fas fa-play featured-icon featured-icon-style-2 featured-icon-hover-effect-1 bg-primary right-4 top-0 m-0"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Parte ofertas-->
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <h3 class="font-weight-bold text-center">TENEMOS LAS MEJORES OFERTAS PARA TI</h3>
                <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                    <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 4, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40,'autoplay': true, 'autoplayTimeout': 3000}">
                        <div>
                            <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                href="{{asset('img/ofertas/oferta-1.png')}}">
                                <img class="img-fluid" src="{{asset('img/ofertas/oferta-1.png')}}" alt="Project Image">
                            </a>
                        </div>
                        <div>
                            <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                href="{{asset('img/ofertas/oferta-2.png')}}">
                                <img class="img-fluid" src="{{asset('img/ofertas/oferta-2.png')}}" alt="Project Image">
                            </a>
                        </div>
                        <div>
                            <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                href="{{asset('img/ofertas/oferta-3.png')}}">
                                <img class="img-fluid" src="{{asset('img/ofertas/oferta-3.png')}}" alt="Project Image">
                            </a>
                        </div>
                        <div>
                            <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                href="{{asset('img/ofertas/oferta-4.png')}}">
                                <img class="img-fluid" src="{{asset('img/ofertas/oferta-4.png')}}" alt="Project Image">
                            </a>
                        </div>
                        <div>
                            <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                href="{{asset('img/ofertas/oferta-5.png')}}">
                                <img class="img-fluid" src="{{asset('img/ofertas/oferta-5.png')}}" alt="Project Image">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Parte productos 
    <div class="container-fluid">
        <div class="row featured-boxes-full featured-boxes-full-scale">
            <div class="col-lg-3 featured-box-full featured-box-full-primary" style="height: 100px;">

                <h4 class="font-weight-normal text-5">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">VIDRIOS </font>
                    </font><strong class="font-weight-extra-bold">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"></font>
                        </font>
                    </strong>
                </h4>

            </div>
            <div class="col-lg-3 featured-box-full featured-box-full-primary" style="height: 100px;">

                <h4 class="font-weight-normal text-5">
                    <font style="vertical-align: inherit;"><strong class="font-weight-extra-bold">
                            <font style="vertical-align: inherit;"></font>
                        </strong>
                        <font style="vertical-align: inherit;">ALUMINIO</font>
                    </font><strong class="font-weight-extra-bold">
                        <font style="vertical-align: inherit;"></font>
                    </strong>
                </h4>

            </div>
            <div class="col-lg-3 featured-box-full featured-box-full-primary" style="height: 100px;">

                <h4 class="font-weight-normal text-5">
                    <font style="vertical-align: inherit;"><strong class="font-weight-extra-bold">
                            <font style="vertical-align: inherit;"></font>
                        </strong>
                        <font style="vertical-align: inherit;"> POLICARBONATO</font>
                    </font><strong class="font-weight-extra-bold">
                        <font style="vertical-align: inherit;"></font>
                    </strong>
                </h4>

            </div>
            <div class="col-lg-3 featured-box-full featured-box-full-primary" style="height: 100px;">

                <h4 class="font-weight-normal text-5">
                    <font style="vertical-align: inherit;"><strong class="font-weight-extra-bold">
                            <font style="vertical-align: inherit;"></font>
                        </strong>
                        <font style="vertical-align: inherit;"> ACRILICO</font>
                    </font><strong class="font-weight-extra-bold">
                        <font style="vertical-align: inherit;"></font>
                    </strong>
                </h4>

            </div>
        </div>
    </div>-->

    <!--Parte servicios-->
    <section style="background-image: url(&quot;{{asset('img/panel/fondo-servicio-3.png')}}&quot;); 
    background-size: cover; background-position: center center; animation-delay: 100ms;">

        <div class="container py-5">
            <div class="col text-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <h2 class="font-weight-normal text-color-light mb-2"> NUESTROS<strong> SERVICIOS</strong></h2>
                <p class="text-color-light opacity-7">Contamos con el mejor equipo de trabajo para llevar a cabo cada proyecto.
                </p>
            </div>
            <div class="row py-3 justify-content-center">
                <div class="col-sm-8 col-md-3 mb-4 mb-md-0 appear-animation animated appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{asset('img/panel/fabricacion.jpg')}}" class="img-fluid hover-effect-2 mb-3" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4 class="mb-0"><a href="#" class="text-2 text-uppercase font-weight-bold pt-2 d-block text-light text-decoration-none">FABRICACIÓN</a>
                                </h4>
                                <p class="text-2 text-justify text-light">Realizamos tus trabajos, de acuerdo a tus especificaciones. Un diseño y trabajo personalizado en ventanas anti ruidos, mamparas, techos de policarbonato, puertas de duchas, cortinas y mantenimientos en general.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-3 mb-4 mb-md-0 appear-animation animated appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{asset('img/panel/instalacion.jpg')}}" class="img-fluid hover-effect-2 mb-3" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4 class="mb-0"><a href="#" class="text-2 text-uppercase font-weight-bold pt-2 d-block text-light text-decoration-none">INSTALACIÓN</a>
                                </h4>
                                <p class="text-2 text-justify text-light">Llevamos a cabo tus proyectos de vidrio templado y crudo, policarbonatos y aluminios. Somos especialistas en instalación de vidrios, puertas, ventanas, mamparas y cualquier tipo de proyecto relacionado.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-3 appear-animation animated appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{asset('img/panel/corte-de-vidrio.jpg')}}" class="img-fluid hover-effect-2 mb-3" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4 class="mb-0">
                                    <a href="#" class="text-2 text-uppercase font-weight-bold pt-2 d-block text-light text-decoration-none">
                                        CORTE DE VIDRIO
                                    </a>
                                </h4>
                                <p class="text-2 text-justify text-light">
                                    Disponemos de todo tipo de vidrio y espejos de diferentes modelos (color, laminados, impresos, incoloros) y grosores, para poder cortar y realizar diseños de acuerdo a sus especificaciones, un trabajo realizado en menos de 24 horas.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-3 appear-animation animated appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{asset('img/panel/remodelacion.jpg')}}" class="img-fluid hover-effect-2 mb-3" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4 class="mb-0">
                                    <a href="#" class="text-2 text-uppercase font-weight-bold pt-2 d-block text-light text-decoration-none">
                                        SUMINISTRO
                                    </a>
                                </h4>

                                <p class="text-2 text-justify text-light">
                                    Suministramos vidrio y espejos de todos los modelos, doble vidrio, laminados, templados, crudo, impresos, etc., con un servicio de reparto diario en diferentes zonas de la provincia Chiclayo y diferente parte del Perú.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <div class="google-map-borders">
        <div class="google-map m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="height:450px;">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.5013536717797!2d-79.84174377199408!3d-6.769192465018312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ceed826025fd7%3A0x65f3f4d30563e3d2!2sAlfonso%20Ugarte%201098%2C%20Chiclayo%2014001!5e0!3m2!1ses!2spe!4v1602386637367!5m2!1ses!2spe" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    @include('shared.cotiza')
</div>
    
@endsection