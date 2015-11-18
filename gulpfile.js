"use strict";

/*******************************************************************************
1. DEPENDENCIES
*******************************************************************************/
var gulp = require('gulp'),                      // gulp core
    sass = require('gulp-sass'),                 // sass compiler
    notify = require('gulp-notify'),             // send notifications to osx
    plumber = require('gulp-plumber'),           // disable interuption
    sourcemaps = require('gulp-sourcemaps'),     // sass sourcemaps
    livereload = require('gulp-livereload');//,     // reload on changes
    // notifier_icon = path.join(__dirname, 'sites_d7/all/themes/custom/tesla_theme/assets/img/tesla-t-red.png');


/*******************************************************************************
2. FILE DESTINATIONS (RELATIVE TO ROOT OF INSTALL)
*******************************************************************************/
var target = {
    theme_sass_src : './assets/scss/**/*.scss',
    theme_css_dest : './assets/css',
};


/*******************************************************************************
3. SASS TASK
*******************************************************************************/
gulp.task('sass', function() {

  var onError = function (error) {
      var lineNumber = (error.line) ? 'LINE ' + error.line + ' -- ' : '';

      notify({
          title: 'Jarvis',
          subtitle: 'Your Task Failed [' + error.plugin + ']',
          message: lineNumber + 'See console.',
          //icon: notifier_icon,
          sound: 'Sosumi'
      }).write(error);

      // DO NOT REMOVE
      // this will log the error to the terminal window as well
      console.log(error);

      this.emit('end');
  };

  gulp.src(target.theme_sass_src)             // get the files

      .pipe(plumber({                         // keep running on errors
          errorHandler: onError
      }))

      .pipe(sourcemaps.init())                // initialize sourcemaps

      .pipe(sass({                            // compile all sass :allthethings:
          style: 'expanded',
          debugInfo: true,
          lineNumbers: true,
          errLogToConsole: true
          // includePaths: paths
      }))

      .pipe(sourcemaps.write())               // write the sourcemaps

      .pipe(gulp.dest(target.theme_css_dest)) // where to put the file

      .pipe(livereload());

});

// Watch scss folder for changes
gulp.task('watch', function () {

    // watch for changes, and reload foo!
    livereload.listen();

    // Watches the scss folder for all .scss and .sass files
    // If any file changes, run the sass task
    gulp.watch(target.theme_sass_src, ['sass'])
});

// Create the default task
gulp.task('default', ['sass', 'watch']);
