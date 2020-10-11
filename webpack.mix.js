const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
        'resources/assets/vendor/bootstrap/css/bootstrap.min.css',
        'resources/assets/vendor/animate/animate.min.css',
        'resources/assets/vendor/simple-line-icons/css/simple-line-icons.min.css',
        'resources/assets/vendor/owl.carousel/assets/owl.carousel.min.css',
        'resources/assets/vendor/owl.carousel/assets/owl.theme.default.min.css',
        'resources/assets/vendor/magnific-popup/magnific-popup.min.css',
        'resources/assets/css/theme.css',
        'resources/assets/css/theme-elements.css',
        'resources/assets/css/theme-blog.css',
        'resources/assets/css/theme-shop.css',
        'resources/assets/css/whatsapp.css',
        'resources/assets/vendor/rs-plugin/css/settings.css',
        'resources/assets/vendor/rs-plugin/css/layers.css',
        'resources/assets/vendor/rs-plugin/css/navigation.css',
        'resources/assets/css/skins/default.css',
        'resources/assets/css/custom.css'
    ],
    'public/css/plantilla.css'
);

mix.scripts([
        'resources/assets/vendor/jquery/jquery.min.js',
        'resources/assets/vendor/jquery.appear/jquery.appear.min.js',
        'resources/assets/vendor/jquery.easing/jquery.easing.min.js',
        'resources/assets/vendor/jquery.cookie/jquery.cookie.min.js',
        'resources/assets/vendor/popper/umd/popper.min.js',
        'resources/assets/vendor/bootstrap/js/bootstrap.min.js',
        'resources/assets/vendor/common/common.min.js',
        'resources/assets/vendor/jquery.validation/jquery.validate.min.js',
        'resources/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js',
        'resources/assets/vendor/jquery.lazyload/jquery.lazyload.min.js',
        'resources/assets/vendor/isotope/jquery.isotope.min.js',
        'resources/assets/vendor/owl.carousel/owl.carousel.min.js',
        'resources/assets/vendor/magnific-popup/jquery.magnific-popup.min.js',
        'resources/assets/vendor/vide/jquery.vide.min.js',
        'resources/assets/vendor/vivus/vivus.min.js',
        'resources/assets/js/theme.js',
        'resources/assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js',
        'resources/assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js',
        'resources/assets/js/views/view.contact.js',
        'resources/assets/js/theme.init.js'
    ],
    'public/js/plantilla.js'
);