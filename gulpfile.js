// Created by Bilal Duckett on 6/17/2016

// grab our gulp packages
var gulp  = require('gulp'),
		gutil = require('gulp-util'),
		jshint = require('gulp-jshint'),
		sass = require('gulp-sass'),
		cleancss = require('gulp-clean-css'),
		bourbon= require('node-bourbon'),
		sourcemaps = require('gulp-sourcemaps'),
		autoprefixer = require('gulp-autoprefixer'),
		concat = require('gulp-concat'),
		browserSync = require('browser-sync').create();

var config = {
	foundationDir: 'node_modules/foundation-sites/',
	materializeDir: 'node_modules/materialize-css/',
	publicDir: './dist'
};

// configure the jshint task
gulp.task('jshint', function() {
	return gulp.src('src/js/**/*.js')
			.pipe(jshint())
			.pipe(jshint.reporter('jshint-stylish'));
});

//compile css

gulp.task('styles', function(){
	gulp.src(['src/sass/**/*.scss'])
			.pipe(sourcemaps.init())
			.pipe(sass(
					{
						includePaths: [config.materializeDir].concat(bourbon.includePaths)
					}
			).on('error', sass.logError))
			.pipe(autoprefixer({
				browsers: ['last 3 versions']
			}))
			.pipe(cleancss())
			.pipe(sourcemaps.write())
			.pipe(gulp.dest('dist/assets/styles'))
			.pipe(browserSync.stream())
});

//compile js

gulp.task('build-js', function() {
	return gulp.src('src/js/**/*.js')
			.pipe(sourcemaps.init())
			.pipe(concat('main.js'))
			//only uglify if gulp is ran with '--type production'
			.pipe(gutil.env.type === 'production' ? uglify() : gutil.noop())
			.pipe(sourcemaps.write())
			.pipe(gulp.dest('dist/assets/js'));
});

// configure which files to watch and what tasks to use on file changes, set test serve

gulp.task('watch', function(){
	browserSync.init(
			{
				proxy: "loc.creatingspacemovement.com"
			}
	);
	gulp.watch(['**.php','src/sass/**/*.scss', './pages/*.html', 'src/js/**/*.js'], ['styles', 'jshint']).on('change', browserSync.reload);
});