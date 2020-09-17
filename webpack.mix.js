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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');



   /* If you would just like to concatenate some plain CSS stylesheets into a single file, you may use the styles method. */
   /* https://laravel.com/docs/8.x/mix */

/*    mix.styles([   
      'public/css/vendor/normalize.css',
      'public/css/vendor/videojs.css'
   ], 'public/css/all.css');




<link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/plugins/OwlCarousel2-2.2.1/animate.css') }}">


<link rel="stylesheet" type="text/css" href="{{ asset('asset/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/styles/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/styles/comun.css') }}"></link> */
