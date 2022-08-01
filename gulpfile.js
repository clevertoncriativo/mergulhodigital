const gulp = require('gulp');
const minify = require('gulp-minify');
const cleanCSS = require('gulp-clean-css');

gulp.task('minify-css', () => {
    return gulp.src('./assets/css/theme.css')
      .pipe(cleanCSS({compatibility: 'ie8'}))
      .pipe(gulp.dest('./assets/dist/css/'));
  });

gulp.task('minify-js', () =>  {
    gulp.src('./assets/js/theme.js')
      .pipe(minify())
      .pipe(gulp.dest('./assets/dist/js/'));
});

gulp.task('default', gulp.series('minify-css', 'minify-js'));