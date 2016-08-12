var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var del = require('del');
var nunjucksRender = require('gulp-nunjucks-render');
var data = require('gulp-data');

gulp.task('clean', function() {
    // You can use multiple globbing patterns as you would with `gulp.src`
    return del('dist');
});

// Static Server + watching scss/html files
gulp.task('serve', ['html', 'sass', 'assets', 'js'], function() {



    browserSync.init({
        server: './dist',
        open: false,
    });

    gulp.watch('src/stylesheets/*.scss', ['sass']);
    gulp.watch('src/*.html', ['html']);
    gulp.watch('src/partials/*.njk', ['html']);
    gulp.watch('src/data.json', ['html']);
    gulp.watch('src/javascripts/*.js', ['js']);
    //gulp.watch("src/*.html").on('change', browserSync.reload);
    //gulp.watch("src/js/*.js").on('change', browserSync.reload);
});

gulp.task('html', function() {

    //return gulp.src(['input/folder/**/*'])
    return gulp.src("src/*.html")
        .pipe(data(function() {
            return require('./src/data.json')
        }))
        .pipe(nunjucksRender({
            path: 'src/partials'
        }))
        .pipe(gulp.dest("dist/"))
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
    return gulp.src("src/assets/*.png")
        .pipe(gulp.dest("dist"))
        .pipe(browserSync.stream());
});

gulp.task('svg', function() {
    return gulp.src("src/assets/*.svg")
        .pipe(gulp.dest("dist"))
        .pipe(browserSync.stream());
});

gulp.task('assets', ['png','svg']);

gulp.task('js', function() {
    return gulp.src("src/javascripts/*.js")
        .pipe(gulp.dest("dist"))
        .pipe(browserSync.stream());
});

// gulp.task('nunjucks', function() {
//     // Gets .html and .nunjucks files in pages
//     return gulp.src('src/index.html')
//         // Renders template with nunjucks
//         .pipe(nunjucksRender({
//             path: 'src/partials'
//         }))
//         // output files in app folder
//         .pipe(gulp.dest('dist/'))
// });

gulp.task('default', ['clean', 'serve']);
