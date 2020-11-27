var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {//タスクの登録
  return gulp.src('./sass/**/*.scss')
    .pipe(sass({outputStyle: 'expanded'}))//cssに出力したときのフォーマット 4種類ある
    .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function() {
  gulp.watch('./sass/**/*.scss', ['sass']);
});
