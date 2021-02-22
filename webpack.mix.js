const mix = require('laravel-mix');
const path = require('path');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// webpack config
mix.webpackConfig({
    resolve: {
        alias: {
            '^public': path.resolve(__dirname, 'public'),
            '^resources': path.resolve(__dirname, 'resources'),
            '^lang': path.resolve(__dirname, 'resources/js/lang'),
            '^modules': path.resolve(__dirname, 'Modules'),
            'ziggy': path.resolve('vendor/tightenco/ziggy/dist/js/route.js')
        }
    }
});
// metronic assets
mix.copyDirectory('resources/assets/staff', 'public/staff/assets');
// staff
mix.sass('resources/sass/staff/app.scss', 'public/staff/css/app.css');
mix.js('resources/js/staff/app.js', 'public/staff/js/app.js');
