"use strict";

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');


gulp.task('sass', function() {

  // gulp.src locates the source files for the process.
  // This globbing function tells gulp to use all files
  // ending with .scss or .sass within the scss folder
  gulp.src('./assets/scss/**/*.scss')

    // Initialize sourcemaps
    .pipe(sourcemaps.init())

    // Converts Sass into CSS with Gulp Sass
    .pipe(sass({

      // Log errors to console instead of stopping run command
      errLogToConsole: true
    }))

    // Write the source maps
    .pipe(sourcemaps.write())

    // Outputs CSS files to the CSS folder
    .pipe(gulp.dest('./assets/css'));
});

// Watch scss folder for changes
gulp.task('watch', function () {
  // Watches the scss folder for all .scss and .sass files
  // If any file changes, run the sass task
  gulp.watch('./assets/scss/**/*.scss', ['sass'])
});

// Create the default task
gulp.task('default', ['sass', 'watch']);
