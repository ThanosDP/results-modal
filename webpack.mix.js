const mix = require('laravel-mix');

mix.disableSuccessNotifications();
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

mix.js('resources/assets/365jobs/js/app.js', 'public/365jobs/js/app.js')
    .sass('resources/assets/365jobs/sass/app.scss', 'public/365jobs/css/app.css');
