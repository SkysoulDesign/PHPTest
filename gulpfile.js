var elixir = require('laravel-elixir'),
    gulp = require('gulp'); //optional :)

gulp.task('semantic', require('./resources/assets/semantic/tasks/build'));

elixir(function (mix) {
    mix.copy('./node_modules/jquery/dist/jquery.js', 'public/js')
        .task('semantic');
});
