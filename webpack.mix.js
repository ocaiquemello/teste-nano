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

mix.copy('resources/images', 'public/assets/images', false);
mix.copy('resources/icons', 'public/assets/icons', false);
mix.copy('resources/css', 'public/assets/css', false);
mix.copy('resources/vendor', 'public/assets/vendor', false);
mix.copy('resources/js', 'public/assets/js', false);
