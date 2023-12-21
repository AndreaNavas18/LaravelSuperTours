const mix = require('laravel-mix');

mix
   .js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
   mix.sass('public/css/estilos.scss', 'public/css');

