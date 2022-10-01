// add new task for sass to css conversion and minification 
var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src(['public/asset/sass/new-style.scss', 'src/scss/*.scss'])
        .pipe(sass())
        .pipe(gulp.dest("public/dist/css"))
        .pipe(browserSync.stream());
});

// Static Server + watching scss/html files
gulp.task('serve', gulp.series('sass', function() {
    
        browserSync.init({
            server: "./"
        });
    
        gulp.watch(['public/asset/sass/*.scss', 'src/scss/*.scss'], gulp.series('sass'));
        gulp.watch("resources/*.blade.php").on('change', browserSync.reload);
        // reload http://127.0.0.1:8000/ after change in blade file
        
    }
));