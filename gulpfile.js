const { src, dest, watch } = require('gulp');
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const minifyCss = require('gulp-cssmin');

function css() {
	return src('app/scss/main.scss')
		.pipe(sass())
		.pipe(minifyCss())
		.pipe(dest('./assets/css'))
}

exports.css = css;
exports.default = function() {
	watch(['app/scss/*.scss', 'app/scss/*/*.scss'], css);
};