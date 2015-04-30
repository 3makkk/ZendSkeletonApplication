var gulp = require('gulp');
var gulpFilter = require('gulp-filter');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var mainBowerFiles = require('main-bower-files');
var browserSync = require('browser-sync').create();

gulp.task('sass', function () {
    gulp.src(['./sass/*.scss'])
        .pipe(sass({
            includePaths: [
                'bower_components/foundation/scss',
                'bower_components/emak-foundation-plugins/scss',
                'bower_components/slick-carousel'
            ]
        }))
        .pipe(minifyCss())
        .pipe(gulp.dest('./css'))
        .pipe(browserSync.reload({stream: true}))
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost:8080"
    });
});

gulp.task('bower-files', function() {
    gulp.src(mainBowerFiles())
        .pipe(gulpFilter('*.js'))
        .pipe(gulp.dest('./js/lib'));
});

gulp.task('watch', function() {
    gulp.watch('./sass/*.scss', ['sass']);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
    gulp.watch('../module/**/*.*').on('change', browserSync.reload);
});



gulp.task("default", ['sass', 'bower-files', 'watch', 'browser-sync']);