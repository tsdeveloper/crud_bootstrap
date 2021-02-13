let mix = require('laravel-mix'),
    gulp = require('gulp');
mix.sourceMaps(false);

//compile scss to css
mix.js('resources/assets/js/app.js', 'js')
    .sass('resources/assets/scss/app.scss',  'css')
    .setPublicPath('public/assets');
