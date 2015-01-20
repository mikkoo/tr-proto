
// Gulpfile for keeping scss -> css files updated
// run 'gulp' when you do changes in scss files


var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');


gulp.task('css', function() {
  gulp.src('app/assets/sass/main.scss')
    .pipe(sass())
    .pipe(autoprefixer('last 10 version'))
    .pipe(gulp.dest('public/css'));

});

gulp.task('watch', function() {
  gulp.watch('app/assets/sass/**/*.scss', ['css']);
})

gulp.task('default', ['watch']);
