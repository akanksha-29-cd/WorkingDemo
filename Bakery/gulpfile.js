'use strict';

var gulp = require('gulp');
//gulp.task('hello', async function(){
//	console.log('woww, hello is my first command in gulp');
//});
// Requires the gulp-sass plugin
var sass = require('gulp-sass');

// Task to compile scss to css
gulp.task('sass', function(){
  return gulp.src('app/SCSS/styles.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('app/CSS'))
});

