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

mix.js('resources/js/editorInit.js', 'public/assets/js')
  .postCss('resources/css/admin/admin.css', 'public/assets/admin/css/admin.css')
  .postCss('resources/css/app.css', 'public/assets/css')
  .postCss('resources/css/sign-in.css', 'public/assets/css')
  .postCss('resources/css/bootstrap-reboot.css', 'public/assets/css');

