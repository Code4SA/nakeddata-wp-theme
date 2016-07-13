var projectName = "nakeddata";

var gulp = require('gulp');
var rename = require('gulp-rename');
var less = require('gulp-less');
// var notify = require('gulp-notify');
var watch = require('gulp-watch');
var prefix = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
// var replace = require('gulp-replace');
var Gulpssh = require('gulp-ssh');
var fs = require("fs");

// var jsInputDir = 'assets/js/**/*.js';
// var jsInputFile = "assets/js/" + projectName + ".js";
var buildDir = "./";

var lessInputDir = 'less/**/*.less';
var lessInputFile = "less/" + projectName + ".less";

var cssOutputDir = "css/";
var jsOutputDir = "js/";

gulp.task('css', function() {
	return gulp.src([lessInputFile])
		.pipe(less())
		.pipe(prefix({ cascade: true }))
		.pipe(rename(projectName + ".css"))
		.pipe(gulp.dest(buildDir + cssOutputDir));
});

gulp.task('watch', function() {
	gulp.watch(lessInputDir, ['css']);
});

gulp.task("deploy", function() {
	var gulpssh = new Gulpssh({ 
		ignoreErrors: false,
		sshConfig: {
			host: "nakeddata.org",
			username: "root",
			port: 22,
			privateKey: fs.readFileSync("/Users/jason/.ssh/id_rsa")
		}
	});
	return gulpssh
		.shell([
			"cd /var/www/nakeddata.org/wp-content/themes/nakeddata", "git pull", "npm install --silent --color=false -p --progress=false", "gulp --no-color"
		])
		.pipe(gulp.dest('logs'));
});

gulp.task('default', ['css']);