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
    mix.postCss('resources/sass/main.css', 'public/css');
    mix.sass('resources/sass/styles.scss', 'public/css');
    mix.sass('resources/sass/signup.scss', 'public/css');
    mix.sass('resources/sass/errors.scss', 'public/css');
    mix.sass('resources/sass/events.scss', 'public/css');
    mix.sass('resources/sass/login.scss', 'public/css');
    mix.sass('resources/sass/profile.scss', 'public/css');
    mix.sass('resources/sass/posts.scss', 'public/css');

    //ADMIN CSS
    mix.postCss('resources/views/admin/lib/owlcarousel/assets/owl.carousel.min.css', 'public/css');
    mix.postCss('resources/views/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', 'public/css');
    mix.postCss('resources/views/admin/css/bootstrap.min.css', 'public/css');
    mix.postCss('resources/views/admin/css/style.css', 'public/css');

    //ADMIN JS
    mix.js('resources/views/admin/lib/chart/chart.min.js','public/js');
    mix.js('resources/views/admin/lib/waypoints/waypoints.min.js','public/js');
    mix.js('resources/views/admin/lib/owlcarousel/owl.carousel.min.js','public/js');
    mix.js('resources/views/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js','public/js');


    // STORE CSS
    mix.postCss('resources/css/store.css', 'public/css');
    mix.postCss('resources/css/detailsProduct.css', 'public/css');
