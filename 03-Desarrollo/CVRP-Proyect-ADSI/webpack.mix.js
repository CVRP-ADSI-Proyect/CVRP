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

/*
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
*/

mix.styles([
    'resources/bootshop/css/bootstrap.min.css',
    'resources/bootshop/css/base.css',
    'resources/bootshop/css/bootstrap-responsive.min.css',
    'resources/bootshop/css/font-awesome.css',
    'resources/bootshop/css/google-code-prettify/prettify.css'
],'public/css/app.css')
    .scripts([
        'resources/bootshop/js/jquery.js',
        'resources/bootshop/js/bootstrap.min.js',
        'resources/bootshop/js/google-code-prettify/prettify.js',
        'resources/bootshop/js/bootshop.js',
        'resources/bootshop/js/jquery.lightbox-0.5.js'
    ],'public/js/app.js')
