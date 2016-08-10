var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');
var del         = require('del');

gulp.task('clean', function() {
  // You can use multiple globbing patterns as you would with `gulp.src`
  return del('dist');
});

// Static Server + watching scss/html files
gulp.task('serve', ['html', 'sass', 'png', 'svg', 'js'], function() {



    browserSync.init({
        server: './dist',
        open: false,
    });

    gulp.watch('src/stylesheets/*.scss', ['sass']);
    gulp.watch('src/*.html', ['html']);
    gulp.watch('src/javascripts/*.js', ['js']);
    //gulp.watch("src/*.html").on('change', browserSync.reload);
    //gulp.watch("src/js/*.js").on('change', browserSync.reload);
});

gulp.task('html', function(){

    //return gulp.src(['input/folder/**/*'])
    return gulp.src("src/*.html")
        .pipe(gulp.dest("dist"))
        .pipe(browserSync.stream());

});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("src/stylesheets/main.scss")
        .pipe(sass())
        .pipe(gulp.dest("dist"))
        .pipe(browserSync.stream());
});

gulp.task('png', function() {
    return gulp.src("src/*.png")
        .pipe(gulp.dest("dist"))
        .pipe(browserSync.stream());
});

gulp.task('svg', function() {
    return gulp.src("src/*.svg")
        .pipe(gulp.dest("dist"))
        .pipe(browserSync.stream());
});

gulp.task('js', function() {
    return gulp.src("src/javascripts/*.js")
        .pipe(gulp.dest("dist"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['clean','serve']);