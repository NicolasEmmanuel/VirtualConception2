const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
<<<<<<< HEAD
        require('tailwindcss'),
=======
        //
        require('tailwindcss'),

>>>>>>> 5e7b71460d3df4587639342283c2d82ae59dd962
    ]);


