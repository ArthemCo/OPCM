var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');

gulp.task('sass', function () {
	return gulp.src('scss/**/*.scss')
		.pipe(sass({ outputStyle: 'compressed' })) // Using gulp-sass
		.pipe(gulp.dest('assets/css/'))
		.pipe(browserSync.reload({
			stream: true
		}));
});

gulp.task('browserSync', function () {
	browserSync.init({
		proxy: 'http://localhost:8888/WPdev/'
	});
});

gulp.task('watch', ['browserSync', 'sass'], function () {
	gulp.watch('scss/**/*.scss', ['sass']);
	gulp.watch('**/*.php', browserSync.reload);
	gulp.watch('assets/js/**/*.js', browserSync.reload);
});
