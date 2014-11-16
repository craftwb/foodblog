var gulp = require('gulp');
var gutil = require('gulp-util');
var notify = require('gulp-notify');
var minify = require('gulp-minify-css');
var autoprefix = require('gulp-autoprefixer');
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');
var run = require('gulp-run');
var sassDir = 'app/sass';
var targetCssDir = 'public/css';

gulp.task('css', function () {

    return gulp.src(sassDir + '/main.scss')
        .pipe(run('clear'))
        .pipe(sass({sourceComments: 'map', sourceMap: 'sass'}))
        .pipe(minify())
        .pipe(autoprefix('last 10 version'))
        .pipe(gulp.dest(targetCssDir))
        .pipe(livereload())
        .pipe(notify('Operations completed'));

});

gulp.task('watch', function () {
    livereload.listen();
    gulp.watch(sassDir + '/**/*.scss', ['css']);
});

gulp.task('default', ['css', 'watch']);