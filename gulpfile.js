var gulp = require('gulp'),
    sourcemaps = require('gulp-sourcemaps'),
    sass = require('gulp-sass'),
    bulkSass = require('gulp-sass-glob-import'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    babel = require('gulp-babel'),
    rollup = require('gulp-rollup'),
    uglify = require('gulp-uglify'),
    gutil = require( 'gulp-util'),
    ftpinfo = require('./ftpinfo'),
    ftp = require('vinyl-ftp'),

    conn = ftp.create( {
        host:     ftpinfo.config.host,
        user:     ftpinfo.config.user,
        password: ftpinfo.config.pass,
        parallel: 10,
        log:      gutil.log
    } );

gulp.task('sass', function(){
    gulp.src('src/scss/app.scss')
        .pipe(sourcemaps.init())
        .pipe(bulkSass())
        .pipe(sass())
        .pipe(autoprefixer('last 2 version'))
        .pipe(cssnano())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('dist/css'));
});

gulp.task('js', function(){
    gulp.src('src/js/**/*.js')
        .pipe(sourcemaps.init())
        .pipe(rollup({
            entry: 'src/js/app.js'
        }))
        .pipe(babel({ presets: ['es2015'] }))
        .pipe(uglify())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('dist/js'));
});

gulp.task('copy', function(){
    gulp.src(['src/*.php', 'src/assets/**'])
        .pipe(gulp.dest('dist'));
});

gulp.task('build', ['js', 'sass', 'copy']);

gulp.task('watch', function(){
    gulp.watch('src/scss/**/*.scss', ['sass']);
    gulp.watch('src/js/**/*.js', ['js']);
    gulp.watch(['src/*.php', 'src/assets/**'], ['copy']);
});

gulp.task('ftp-test', function(){
    var globs = [ 'dist/**' ];
    return gulp.src(globs, { base: 'dist', buffer: false })
        .pipe(conn.dest('/beta'));
});

gulp.task('ftp-prod', function(){
    var globs = [ 'dist/**' ];
    return gulp.src(globs, { base: 'dist', buffer: false })
        .pipe(conn.dest('/'));
});


gulp.task('deploy-test', ['build', 'ftp-test']);
gulp.task('deploy-prod', ['build', 'ftp-prod']);
gulp.task('dev', ['build', 'watch']);
gulp.task('default', ['dev']);