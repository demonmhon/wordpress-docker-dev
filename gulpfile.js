const babelify = require('babelify');
const banner = require('gulp-banner');
const browserify = require('browserify');
const buffer = require('vinyl-buffer');
const cleanCSS = require('gulp-clean-css');
const cssbeautify = require('gulp-cssbeautify');
const gulp = require('gulp');
const pkg = require('./package.json');
const rename = require('gulp-rename');
const scss = require('gulp-sass');
const source = require('vinyl-source-stream');
const uglify = require('gulp-uglify');

const comment = [
  '/**',
  ' * <%= pkg.name %> <%= pkg.version %>',
  ' * <%= pkg.description %>',
  ' *',
  ' * @version v<%= pkg.version %>',
  ' * @link <%= pkg.homepage %>',
  ' * @license <%= pkg.license %>',
  ' */\n',
].join('\n');

const assetsConfig = {
  srcJs: './theme-src/js',
  srcScss: './theme-src/scss',
  distDir: './theme/assets',
};

function logError(err) {
  console.log(err.toString());
  this.emit('end');
}

const compileScript = () => {
  return browserify({
    entries: [`${assetsConfig.srcJs}/index.js`],
  })
    .transform(
      babelify.configure({
        presets: ['@babel/preset-env'],
      })
    )
    .bundle()
    .on('error', logError)
    .pipe(source('script.js'))
    .pipe(buffer())
    .pipe(banner(comment, { pkg: pkg }))
    .pipe(gulp.dest(assetsConfig.distDir))
    .pipe(uglify())
    .pipe(banner(comment, { pkg: pkg }))
    .pipe(rename('script.min.js'))
    .pipe(gulp.dest(assetsConfig.distDir));
};

const compileStyle = () => {
  return gulp
    .src(`${assetsConfig.srcScss}/style.scss`)
    .pipe(scss())
    .on('error', logError)
    .pipe(cssbeautify())
    .pipe(rename('style.css'))
    .pipe(banner(comment, { pkg: pkg }))
    .pipe(gulp.dest(assetsConfig.distDir))
    .pipe(cleanCSS())
    .pipe(rename('style.min.css'))
    .pipe(banner(comment, { pkg: pkg }))
    .pipe(gulp.dest(assetsConfig.distDir));
};

const watchScript = () => {
  gulp.watch(`${assetsConfig.srcJs}/**/*.js`, gulp.parallel(compileScript));
};
const watchStyle = () => {
  gulp.watch(`${assetsConfig.srcScss}/**/*.scss`, gulp.parallel(compileStyle));
};

const build = gulp.series(compileScript, compileStyle);
build.description = 'serve compiled source on local server at port 3000';

const watch = gulp.parallel(watchScript, watchStyle);
watch.description = 'watch for changes to all source';

const defaultTasks = gulp.parallel(build, watch);

gulp.task('default', gulp.series(defaultTasks));
gulp.task('watch', gulp.series(watch));
