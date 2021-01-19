let project_folder="dist";
let source_folders="src";

let path={
  build:{
    html: project_folder+"/",
    css: project_folder+"/scss/",
    js: project_folder+"/js/",
    img: project_folder+"/img/",
    fonts: project_folder+"/fonts/",
  },
  src:{
    html: source_folders+"/",
    css: source_folders+"/scss/style.scss",
    js: source_folders+"/js/script.js",
    img: source_folders+"/img/**/*.{jpg,png,svg,gif,ico}",
    fonts:source_folders+"/fonts/*.ttf",
  },
  watch:{
    html: source_folders+"/**/*.html",
    css: source_folders+"/scss/**/*.scss",
    js: source_folders+"/js/**/*.js",
    img: source_folders+"/img/**/*.{jpg,png,svg,gif,ico}",
  },
  clean:"./"+project_folder+"/"
}

let {src, dest}=require('gulp'),
  gulp=require('gulp'),