var gulp = require('gulp');
var notify = require('gulp-notify');
var minify = require('gulp-minify-css');
var autoprefix = require('gulp-autoprefixer');
var sass = require('gulp-sass');
var exec = require('child_process').exec;

var sassDir = 'app/sass';
var targetCssDir = 'public/css';

gulp.task('css', function () {

    return gulp.src(sassDir + '/main.scss')
        .pipe(sass({sourceComments: 'map', sourceMap: 'sass'}))
        .pipe(minify())
        .pipe(autoprefix('last 10 version'))
        .pipe(gulp.dest(targetCssDir))
        .pipe(notify('Operations completed'))

});

gulp.task('watch', function () {
    gulp.watch(sassDir + '/**/*.scss', ['css']);
});

gulp.task('default', ['css', 'watch']);
