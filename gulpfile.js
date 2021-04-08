var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var uglify = require("gulp-uglify");
var concat = require("gulp-concat");

var sassPaths = [
  'core/scss/*.scss',
  'includes/lib/*.css',
  'includes/css/*.scss',
];

var js = [
  'includes/lib/jquery.js',
];

gulp.task('minify-js', function () {
  gulp.src(js)
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./includes/js'))
});

gulp.task('sass', function () {
  $.autoprefixer = function (param) {
  };

  return gulp.src(sassPaths)
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed'
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(concat('app.min.css'))
    .pipe(gulp.dest('includes/css'))
});

gulp.task('default', ['sass', 'minify-js'], function () {
  gulp.watch(['includes/css/**/*.scss'], ['sass']);
  gulp.watch(['core/scss/**/*.scss'], ['sass']);
  gulp.watch(js, ['minify-js']);
});
