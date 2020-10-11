<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>VISACOL SRL</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->

    <link rel="shortcut icon" href="{{!! asset('img/panel/logo-small.png') !!}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('img/panel/logo-small.png')}}">

    <link rel="shortcut icon" href="{{asset('img/panel/logo-small.png')}}" type="image/png" />
    {{-- <link rel="apple-touch-icon" href="{{asset('img/panel/logo-small.png')}}"> --}}
<!-- e0a6de51b8bbea2aff01d59f4dc307e30cbfcb79-->

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plantilla.css')}}">
    <!-- Head Libs -->
    <script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>

</head>

<body>

    <div class="body">

        @include('shared.navbar')

        @yield('contenido')

        @include('shared.footer')
    </div>

    <script src="{{asset('js/plantilla.js')}}"></script>
    @yield('script')
    @yield('scriptFc')
</body>

</html>
