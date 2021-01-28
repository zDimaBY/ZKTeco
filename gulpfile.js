const rename = require('gulp-rename');

let project_folder="docs";
let source_folder="app";

let path={
  docs:{
    html: project_folder+"/",
    css: project_folder+"/css/",
    js: project_folder+"/js/",
    img: project_folder+"/img/",
    fonts: project_folder+"/fonts/",
  },
  app:{
    html: [source_folder+"/*.html","!"+source_folder+"/_*.html"],
    css: source_folder+"/css/*.css",
    js: source_folder+"/js/script.js",
    img: source_folder+"/img/**/*.{jpg,png,svg,gif,ico,webp}",
    fonts:source_folder+"/fonts/**/*.ttf",
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
  imagemin=require("gulp-imagemin"),
  webp=require("gulp-webp"),
  webphtml=require("gulp-webp-html"),
  ttf2woff = require("gulp-ttf2woff"),
  ttf2woff2 = require("gulp-ttf2woff2"),
  uglify=require("gulp-uglify-es").default;

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
    .pipe(webphtml())
    .pipe(dest(path.docs.html))
    .pipe(browsersync.stream())
}
function css(){
  return src(path.app.css)
    .pipe(scss({outputStyle:"expanded"}))
    .pipe(autoprefixer({ooverrideBrowserslist: ["last 5 versions"],cascade: true}))
    .pipe(group_media())
    .pipe(dest(path.docs.css))
    .pipe(clean_css())
    .pipe(rename({extname: ".min.css"}))
    .pipe(dest(path.docs.css))
    .pipe(browsersync.stream())
}
function js(){
  return src(path.app.js)
    .pipe(fileinclude())
    .pipe(dest(path.docs.js))
    .pipe(uglify())
    .pipe(rename({extname: ".min.js"}))
    .pipe(dest(path.docs.js))
    .pipe(browsersync.stream())
}
function img(){
  return src(path.app.img)
  .pipe(webp({quality:70}))
  .pipe(dest(path.docs.img))
  .pipe(src(path.app.img))
  .pipe(imagemin({progressive: true,
    svgoPlugins:[{removeViewBox: false}],
    interlaced: true,
    optimizationLevel: 3}))
  .pipe(dest(path.docs.img))
  .pipe(browsersync.stream())
}
function fonts(){
  src(path.app.fonts)
  .pipe(ttf2woff())
  .pipe(dest(path.docs.fonts))
  return src(path.app.fonts)
  .pipe(ttf2woff2())
  .pipe(dest(path.docs.fonts));
}
gulp.task('svg_sprite', function() {
  return gulp.src([source_folder + '/iconsprite/*.svg'])
      .pipe(svg_sprite({mode:{stack: {sprite: "../icons/icons.svg",
        example: true}}}))
      .pipe(dest(path.docs.img))})
function watchFiles(params){
  gulp.watch([path.watch.html],html)
  gulp.watch([path.watch.css],css)
  gulp.watch([path.watch.js],js)
  gulp.watch([path.watch.img],img)
}
function clean(params){
  return del(path.clean);
}
let docs=gulp.series(clean, gulp.parallel(css, js, html, img, fonts));
let watch=gulp.parallel(watchFiles,docs,browserSync);

exports.fonts=fonts;
exports.img=img;
exports.scss=scss;
exports.html=html;
exports.docs=docs;
exports.watch=watch;
exports.default=watch;