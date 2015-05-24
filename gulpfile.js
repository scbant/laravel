var elixir = require('laravel-elixir');

var paths = {
    jquery: 'vendor/bower_components/jquery/',
    bootstrap: 'vendor/bower_components/bootstrap-sass-official/assets/',
    html5shiv: 'vendor/bower_components/html5shiv/',
    respond: 'vendor/bower_components/respond/'
}

elixir(function (mix) {
    //bootstrap
    mix.rubySass('style.scss', 'public/css/')
        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
        .scripts([
            paths.jquery + 'dist/jquery.js',
            paths.bootstrap + 'javascripts/bootstrap.js',
            paths.html5shiv + 'dist/html5shiv.js',
            paths.respond + 'src/respond.js'
        ], 'public/js/bootstrap.js', './');
});

