const { kuding } =  require('./webpack.mix.kuding.js');
const { mix } = require('laravel-mix');

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

mix.js(kuding.assetsPath('js/theme.js'), kuding.publicAssetsPath('js'))
   .sass(kuding.assetsPath('sass/theme.scss'), kuding.publicAssetsPath('css'))
   .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', kuding.publicAssetsPath('fonts/bootstrap'))


   ;

kuding.setPublicPath(mix);
