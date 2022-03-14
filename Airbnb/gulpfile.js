var gulp = require('gulp');
// Requires the gulp-sass plugin
var sass = require('gulp-sass');

// Task to compile scss to css
gulp.task('sass', function(){
  return gulp.src('Project/scss/styles.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('Project/css'))
});