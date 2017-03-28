'use strict';

var gulp = require('gulp'),
    scss = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify'),
    babel = require('gulp-babel'),
    concat = require('gulp-concat'),
    autoprefixer = require('gulp-autoprefixer'),
    plumber = require('gulp-plumber'),
    rebaseUrls = require('gulp-css-rebase-urls');

var SASS_INCLUDE_PATHS = [
    './node_modules/normalize-scss/sass/'
];

function handleError(err) {
    console.log(err.toString());
    this.emit('end');
}

gulp.task('styles', function () {
    return gulp.src('./sass/style.scss')
        .pipe(plumber({ errorHandler: handleError }))
        .pipe(sourcemaps.init())
        .pipe(scss())
        .pipe(autoprefixer({ browsers: ['last 2 versions', 'safari 8', 'ie 11', 'opera 12.1', 'ios 6', 'android 4'] }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./'));
});
gulp.task('js', function() {
    return gulp.src('./source-js/**/*.js')
        .pipe(plumber({ errorHandler: handleError }))
        .pipe(sourcemaps.init())
        .pipe(babel({compact: true}))
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./js'));
});

gulp.task('watch', ['styles', 'js'], function () {
    gulp.watch('./sass/**/*.scss', ['styles']);
    gulp.watch('./source-js/**/*.js', ['js']);
});

gulp.task('default', ['styles', 'js'], function () {

});