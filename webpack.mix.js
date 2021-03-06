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
        //
    ]);
    mix.postCss('resources/css/artistas.css', 'public/css');
    mix.postCss('resources/css/musicas.css', 'public/css');
    mix.js('resources/js/main.js', 'public/js');
    mix.js('resources/js/gtag.js', 'public/js');
    mix.sass('resources/sass/main.scss', 'public/css');
    mix.sass('resources/sass/styles.scss', 'public/css');
