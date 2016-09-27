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
         'et-line-font-plugin/style.css',
         'bootstrap-material-design-font/css/material.css',
         'tether/tether.min.css',
         'bootstrap/css/bootstrap.min.css',
         'socicon/css/socicon.min.css',
         'animate.css/animate.min.css',
         'dropdown/css/style.css',
         'theme/css/style.css',
         'mobirise-gallery/style.css',
         'mobirise/css/mbr-additional.css'
     ], 'public/css/neendut.css');

     mix.scripts([
         'web/assets/jquery/jquery.min.js',
         'tether/tether.min.js',
         'bootstrap/js/bootstrap.min.js',
         'smooth-scroll/SmoothScroll.js',
         'viewportChecker/jquery.viewportchecker.js',
         'dropdown/js/script.min.js',
         'touchSwipe/jquery.touchSwipe.min.js',
         'jarallax/jarallax.js',
         'masonry/masonry.pkgd.min.js',
         'imagesloaded/imagesloaded.pkgd.min.js',
         'bootstrap-carousel-swipe/bootstrap-carousel-swipe.js',
         'theme/js/script.js',
         'mobirise-gallery/script.js',
         'formoid/formoid.min.js',
     ], 'public/js/plugins.js');
 });
