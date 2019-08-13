var gulp = require('gulp');

var sass = require('gulp-sass');
var minifycss = require('gulp-minify-css');
var sourcemaps = require('gulp-sourcemaps');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');

var babel = require('gulp-babel');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync').create();

var imagemin = require('gulp-imagemin');
var imageminPngquant = require('imagemin-pngquant');
var imageminZopfli = require('imagemin-zopfli');
var imageminMozjpeg = require('imagemin-mozjpeg'); 
var imageminGiflossy = require('imagemin-giflossy');


gulp.task('browserSync', ['styles'], function() {

 browserSync.init({
  proxy: "http://mortinsons:8888/"
});

 gulp.watch("src/sass/**/*.scss", ['styles']);
 gulp.watch("*.php").on('change', browserSync.reload);
});


gulp.task('styles', function(){
  gulp.src(['src/sass/**/*.scss'])
  .pipe(sourcemaps.init())
  .pipe(sass({ includePaths: ['src/sass/*'] }))
  .pipe(postcss([ autoprefixer({ browsers: ['ie >= 10', 'Firefox >= 26', 'Chrome > 0', 'Safari >= 6'] }) ]))
  .pipe(gulp.dest('.'))
  .pipe(minifycss())
  .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest('.'))
  .pipe(browserSync.stream());
});


gulp.task('scripts', function(){
  return gulp.src([
    'src/js/scripts/header.js',
    'src/js/scripts/blog.js',
    'src/js/scripts/front-page.js'
    ])
  .pipe(babel({
      presets: ['@babel/env']
  }))
  .pipe(uglify())
  .pipe(gulp.dest('dist/js'))
  .pipe(concat('main.js'))
  .pipe(gulp.dest('dist/js'))
  .pipe(browserSync.stream());
});

gulp.task('imagemin', function(){
  return gulp.src(['src/img/**/*.{gif,png,jpg,svg}'])
  .pipe(imagemin([
    imageminPngquant({
      speed: 1,
      quality: 98 
    }),
    imageminZopfli({
      more: true
    }),
    imageminGiflossy({
      optimizationLevel: 3,
      optimize: 3, 
      lossy: 2
    }),
    imagemin.svgo({
      plugins: [{
        removeViewBox: false,
        cleanupIDs: false,
        removeTitle: true,
        removeUselessDefs: false
      }]
    }),
    imagemin.jpegtran({
      progressive: true
    }),
    imageminMozjpeg({
      quality: 98
    })
    ]))
  .pipe(gulp.dest('dist/img/'))
  .pipe(browserSync.stream());
});

gulp.task('copyFonts', function () {
  return gulp.src(['src/fonts/**/**/*', 'dist/fonts/**/**/*'], {
    base: 'src'
  }).pipe(gulp.dest('dist'));
});



gulp.task('watch', function() {
 gulp.watch('src/sass/**/*.scss', ['styles']);
 gulp.watch('src/js/**/*.js', ['scripts']);
 gulp.watch("*.php", ['browserSync']);
});



gulp.task('build', ['imagemin', 'scripts', 'styles', 'copyFonts']);