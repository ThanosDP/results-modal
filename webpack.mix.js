const mix = require("laravel-mix");

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

mix.js("resources/assets/_name_/js/app.js", "public/_name_/js/app.js").sass(
    "resources/assets/_name_/sass/main.scss",
    "public/_name_/css/app.css"
);

if (mix.inProduction()) {
    mix.version();
}
