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
 Utilizamos o Laravel Mix para instalar e configurar o bootstrap;
 Webpack é uma ferramenta que permite que tenhamos um pipeline;
 Uma linha de execução que queiramos fazer no nosso front-end;
 Vai transpilar(Compilar e traduzir) um Typescript para JavaScript;
 Vai transpilar um SCSS para CSS;

 */

mix
    .sass('resources/css/app.scss', 'public/css');