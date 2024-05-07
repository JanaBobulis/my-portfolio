const gulp = require("gulp")
const babel = require("gulp-babel")
const minify = require("gulp-minify")

gulp.task("babel", () => {
 return gulp
   .src("wp-content/themes/Jana-Portfolio/dev/js/scripts.js")
   .pipe(
     babel({
       presets: ["@babel/env"],
     })
   )
   .pipe(minify())
   .pipe(gulp.dest("wp-content/themes/Jana-Portfolio/js"))
})

//SASS
const sass = require("gulp-sass")(require("sass"))
const autoprefixer = require("gulp-autoprefixer")
const cleanCSS = require("gulp-clean-css")
const sourcemaps = require("gulp-sourcemaps")

gulp.task("sass", () => {
 return (
   gulp
     .src(["wp-content/themes/Jana-Portfolio/dev/sass/style.scss", "wp-content/themes/Jana-Portfolio/dev/sass/critical.scss"])
     .pipe(sass().on("error", sass.logError))
     .pipe(
       autoprefixer({
         cascade: false,
       })
     )
     .pipe(gulp.dest("wp-content/themes/Jana-Portfolio"))
 )
})


var rename = require("gulp-rename")
var concat = require("gulp-concat-util")

gulp.task("styles:critical", function () {
 return (
   gulp
     .src("wp-content/themes/Jana-Portfolio/critical.css")
     // wrap with style tags
     .pipe(concat.header("<style>"))
     .pipe(concat.footer("</style>"))
     // convert it to a php file
     .pipe(
       rename({
         basename: "criticalCSS",
         extname: ".php",
       })
     )
     // insert it Wordpress theme folder
     .pipe(gulp.dest("wp-content/themes/Jana-Portfolio"))
 )
})

// Then execute task with bracket '()' instead of '[]'
gulp.task("watch", function () {
 gulp.watch(
   ["wp-content/themes/Jana-Portfolio/dev/sass/*.scss", "wp-content/themes/Jana-Portfolio/dev/sass/partials/*.scss", "wp-content/themes/Jana-Portfolio/dev/sass/modules/*.scss", "wp-content/themes/Jana-Portfolio/dev/sass/components/*.scss", "wp-content/themes/Jana-Portfolio/dev/sass/content-rows/*.scss"],
   gulp.parallel([
     "sass",
     // "sass-minify"
   ])
 )
 gulp.watch("wp-content/themes/Jana-Portfolio/critical.css", gulp.parallel("styles:critical"))
 gulp.watch("wp-content/themes/Jana-Portfolio/dev/js/*.js", gulp.parallel("babel"))
})