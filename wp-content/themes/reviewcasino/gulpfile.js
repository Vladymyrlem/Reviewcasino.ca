// eslint-disable-next-line no-undef
const gulp = require('gulp');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass');
// eslint-disable-next-line no-undef
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const groupmq = require('gulp-group-css-media-queries');
const browserSync = require("browser-sync");

const sassStyle = 'sass/style.scss',
    cssStyle = './',
    sassFiles = 'sass/sections/*.scss',
    cssDest = 'css/';

/**
 * Compile Sass files
 */
async function style() {
    gulp.src(sassStyle)
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest(cssStyle))
        .pipe(browserSync.stream());
};

async function styles() {
    gulp.src(sassFiles)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(cssDest))
        .pipe(browserSync.stream());
};
gulp.task('style', style);
gulp.task('styles', styles);
gulp.task('buildSass', gulp.parallel(
    async function style() {
        gulp.src(sassStyle)
            .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
            .pipe(gulp.dest(cssStyle))
            .pipe(browserSync.stream());
    },
    async function styles() {
        gulp.src(sassFiles)
            .pipe(sass().on('error', sass.logError))
            .pipe(gulp.dest(cssDest))
            .pipe(browserSync.stream());
    }
));
