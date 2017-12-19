let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.js([
	'node_modules/jquery/dist/jquery.js',
	'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'
	], 'public/js/all.js');

mix.browserSync({
	proxy:'127.0.0.1:8000'
});

