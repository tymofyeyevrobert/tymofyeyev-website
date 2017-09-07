var gulp = require('gulp');
var notify = require("gulp-notify");
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var autoprefixer = require('gulp-autoprefixer');
var concatCss = require('gulp-concat-css');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

gulp.task('styles', function () {
    return gulp.src('assets/styles/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({ browsers: ['last 2 versions'], cascade: false }))
        .pipe(concatCss("styles/main.css"))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('dist/styles'))
        .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('scripts', function() {
    return gulp.src(['./assets/js/general.js'])
        .pipe(concat('general.js'))
        .pipe(gulp.dest('./dist/js/'))
        .pipe(uglify())
        .pipe(gulp.dest('./dist/js/'))
        .pipe(notify({ message: 'Scripts task complete' }))
});

gulp.task('watch', function () {
    gulp.watch('assets/styles/*.scss', ['styles']);
    gulp.watch('assets/js/*.js', ['scripts']);
});

gulp.task ('images', function () {
   return gulp.src('assets/images/*.*')
       .pipe(gulp.dest('dist/images'))
});