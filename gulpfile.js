var gulp = require('gulp');
var sass = require('gulp-sass');

//compile sass
gulp.task('sass', function() {
    return gulp.src('wp-content/themes/bubbo-theme/src/scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('wp-content/themes/bubbo-theme/dist/css/'))
});

//compile on save
gulp.task('watch', function() {
    gulp.watch('wp-content/themes/bubbo-theme/src/scss/**/*.scss', ['sass']);
});