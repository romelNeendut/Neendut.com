const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

 elixir(function(mix) {
     mix.styles([
         'mobirise/et-line-font-plugin/style.css',
         'mobirise/bootstrap-material-design-font/css/material.css',
         'mobirise/tether/tether.min.css',
         'mobirise/bootstrap/css/bootstrap.min.css',
         'mobirise/socicon/css/socicon.min.css',
         'mobirise/animate.css/animate.min.css',
         'mobirise/dropdown/css/style.css',
         'mobirise/theme/css/style.css',
         'mobirise/mobirise-gallery/style.css',
         'mobirise/css/mbr-additional.css',
     ], 'public/css/neendut.css');

     mix.scripts([
         'mobirise/web/assets/jquery/jquery.min.js',
         'mobirise/tether/tether.min.js',
         'mobirise/bootstrap/js/bootstrap.min.js',
         'mobirise/smooth-scroll/SmoothScroll.js',
         'mobirise/viewportChecker/jquery.viewportchecker.js',
         'mobirise/dropdown/js/script.min.js',
         'mobirise/touchSwipe/jquery.touchSwipe.min.js',
         'mobirise/jarallax/jarallax.js',
         'mobirise/masonry/masonry.pkgd.min.js',
         'mobirise/imagesloaded/imagesloaded.pkgd.min.js',
         'mobirise/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js',
         'mobirise/theme/js/script.js',
         'mobirise/mobirise-gallery/script.js',
         'mobirise/formoid/formoid.min.js',
         'vue/vue.min.js',
     ], 'public/js/neendut.js');


    //  Spotter Template

      mix.styles([
          'spotter/fonts/font-awesome.css',
          'http://fonts.googleapis.com/css?family=Montserrat:400,700',
          'spotter/css/bootstrap.css',
          'spotter/css/bootstrap-select.min.css',
          'spotter/css/owl.carousel.css',
          'spotter/css/style.css',
          'spotter/css/user.style.css',
      ], 'public/css/spotter.css');

      mix.scripts([
          'spotter/js/jquery-2.1.0.min.js',
          'spotter/js/before.load.js',
          'http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places',
          'spotter/js/jquery-migrate-1.2.1.min.js',
          'spotter/bootstrap/js/bootstrap.min.js',
          'spotter/js/bootstrap-select.min.js',
          'spotter/js/smoothscroll.js',
          'spotter/js/bootstrap-select.min.js',
          'spotter/js/jquery.hotkeys.js',
          'spotter/js/custom.js',
      ],  'public/js/spotter.js');

 });
