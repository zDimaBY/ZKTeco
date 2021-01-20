const rename = require('gulp-rename');

let project_folder="docs";
let source_folder="app";

let path={
  build:{
    html: project_folder+"/",
    css: project_folder+"/css/",
    js: project_folder+"/js/",
    img: project_folder+"/img/",
    fonts: project_folder+"/fonts/",
  },
  app:{
    html: [source_folder+"/*.html","!"+source_folder+"/_*.html"],
    css: source_folder+"/css/style.css",
    js: source_folder+"/js/script.js",
    img: source_folder+"/img/**/*.{jpg,png,svg,gif,ico,webp}",
    fonts:source_folder+"/fonts/*.ttf",
  },
  watch:{
    html: source_folder+"/**/*.html",
    css: source_folder+"/css/**/*.css",
    js: source_folder+"/js/**/*.js",
    img: source_folder+"/img/**/*.{jpg,png,svg,gif,ico,webp}",
  },
  clean:"./"+project_folder+"/"
}

let {src, dest}=require('gulp'),
  gulp=require('gulp'),
  browsersync=require("browser-sync").create(),
  fileinclude=require("gulp-file-include"),
  del=require("del"),
  scss=require("gulp-sass"),
  autoprefixer=require("gulp-autoprefixer"),
  group_media=require("gulp-group-css-media-queries"),
  clean_css=require("gulp-clean-css"),
  imagemin = require("gulp-imagemin"),
  uglify = require("gulp-uglify-es").default;

function browserSync(params){
  browsersync.init({
    server: {
      baseDir: "./"+project_folder+"/"
    },
    port:3000,
    notify:false
  })
}

function html(){
  return src(path.app.html)
    .pipe(fileinclude())
    .pipe(dest(path.build.html))
    .pipe(browsersync.stream())
}
function css(){
  return src(path.app.css)
    .pipe(scss({outputStyle:"expanded"}))
    .pipe(autoprefixer({ooverrideBrowserslist: ["last 5 versions"],cascade: true}))
    .pipe(group_media())
    .pipe(dest(path.build.css))
    .pipe(clean_css())
    .pipe(rename({extname: ".min.css"}))
    .pipe(dest(path.build.css))
    .pipe(browsersync.stream())
}
function js(){
  return src(path.app.js)
    .pipe(fileinclude())
    .pipe(dest(path.build.js))
    .pipe(uglify())
    .pipe(rename({extname: ".min.js"}))
    .pipe(dest(path.build.js))
    .pipe(browsersync.stream())
}
function img(){
  return src(path.app.img)
    .pipe(dest(path.build.img))
    .pipe(browsersync.stream())
}
function watchFiles(params){
  gulp.watch([path.watch.html],html)
  gulp.watch([path.watch.css],css)
  gulp.watch([path.watch.js],js)
}
function clean(params){
  return del(path.clean);
}
let build=gulp.series(clean, gulp.parallel(css, js, html));
let watch=gulp.parallel(watchFiles,build,browserSync);

exports.scss=scss;
exports.html=html;
exports.build=build;
exports.watch=watch;
exports.default=watch;