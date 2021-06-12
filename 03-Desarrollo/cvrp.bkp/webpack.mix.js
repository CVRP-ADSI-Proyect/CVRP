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
//
// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

// Se ejecuta el comando: "npm run dev" para hacer mix de los .css y .js
mix.styles([
    'resources/admin-press/css/bootstrap.min.css',
    'resources/admin-press/css/morris.css',
    'resources/admin-press/css/style.css',
    'resources/admin-press/css/blue-dark.css',
],'public/css/template.css')
.scripts([
        'resources/admin-press/js/jquery.min.js',
        'resources/admin-press/js/popper.min.js',
        'resources/admin-press/js/bootstrap.min.js',
        'resources/admin-press/js/jquery.slimscroll.js',
        'resources/admin-press/js/waves.js',
        'resources/admin-press/js/sidebarmenu.js',
        'resources/admin-press/js/sticky-kit.min.js',
        'resources/admin-press/js/custom.min.js',
        'resources/admin-press/js/jquery.sparkline.min.js',
        'resources/admin-press/js/raphael-min.js',
        'resources/admin-press/js/morris.min.js',
        'resources/admin-press/js/dashboard1.js',
        'resources/admin-press/js/switcher.js',
    ],'public/js/template.js')
