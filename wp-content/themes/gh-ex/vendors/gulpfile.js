const gulp = require('gulp');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass');


var sassFiles = './sass/**/*.scss',
    cssDest = './css/';

gulp.task('styles', function(){
    gulp.src('./sass/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(cssDest));
});

gulp.task('watch',function() {
    gulp.watch(sassFiles,['styles']);
});