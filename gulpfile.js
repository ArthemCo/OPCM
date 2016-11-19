var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var concat = require('gulp-concat');

// compiles and minifies SCSS to CSS
gulp.task('sass', function () {
	return gulp.src('scss/**/*.scss')
		.pipe(sass({ outputStyle: 'compressed' }).on('error', function (err) {
			console.error(err.message);
			browserSync.notify(err.message, 3000); // Display error in the browser
			this.emit('end'); // Prevent gulp from catching the error and exiting the watch process
		})) // Using gulp-sass
		.pipe(gulp.dest('assets/css/'))
		.pipe(browserSync.reload({
			stream: true
		}));
});

// reloads changes to files in browser live preview
gulp.task('browserSync', function () {
	browserSync.init({
		proxy: 'http://localhost:8888/WPdev/'
	});
});

gulp.task('minify', function () {
	return gulp.src(['assets/js/modernizr.js', 'assets/js/app.js'])
		.pipe(concat({ path: 'assets/js/app.min.js', stat: { mode: 0666 } }))
		.pipe(gulp.dest('./dist'));
});

// starts the whole b'doodler up
gulp.task('watch', ['browserSync', 'sass'], function () {
	gulp.watch('scss/**/*.scss', ['sass']);
	gulp.watch('**/*.php', browserSync.reload);
	gulp.watch('assets/js/**/*.js', browserSync.reload);

	// stop old version of gulp watch from running when you modify the gulpfile
	gulp.watch("gulpfile.js").on("change", function () {
		process.exit(0);
	});
});
