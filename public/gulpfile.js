var gulp = require('gulp');
var gulpFilter = require('gulp-filter');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var mainBowerFiles = require('main-bower-files');

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
});

gulp.task('bower-files', function() {
    gulp.src(mainBowerFiles())
        .pipe(gulpFilter('*.js'))
        .pipe(gulp.dest('./js/lib'));
});

gulp.task('watch', function() {
    gulp.watch('./sass/*.scss', ['sass']);
});



gulp.task("default", ['sass', 'bower-files', 'watch']);