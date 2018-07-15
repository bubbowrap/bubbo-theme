var gulp = require('gulp');
var sass = require('gulp-sass');

//compile sass
gulp.task('sass', function() {
    return gulp.src('wp-content/themes/bubbo-theme/src/scss/site.scss')
    .pipe(sass())
    .pipe(gulp.dest('wp-content/themes/bubbo-theme/dist/css/'))
});