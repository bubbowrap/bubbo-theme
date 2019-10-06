var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    uglify = require('gulp-uglify');
    
//compile sass
gulp.task('sass', function() {
    return gulp.src('wp-content/themes/bubbo-theme/src/scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('wp-content/themes/bubbo-theme/dist/css/'))
});

//compile on save
gulp.task('watch', function() {
    gulp.watch('wp-content/themes/bubbo-theme/src/scss/**/*.scss', gulp.series('sass'));
});


//minifies js
gulp.task('minify-js', function() {
   return gulp.src('wp-content/themes/bubbo-theme/src/js/**/*.js')
   .pipe(uglify())
   .pipe(gulp.dest('wp-content/themes/bubbo-theme/dist/js/'))
});

//minifies css
gulp.task('minify-css', function() {
    return gulp.src('wp-content/themes/bubbo-theme/src/scss/**/*.scss')
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(sass())
    .pipe(cssnano())
    .pipe(gulp.dest('wp-content/themes/bubbo-theme/dist/css/'))
});

//builds everything
gulp.task('build', gulp.series('minify-css', 'minify-js', function() {
    console.log('Building and...all done!');
}));