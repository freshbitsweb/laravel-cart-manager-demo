let mix = require("laravel-mix");
let tailwindcss = require("tailwindcss");
require("laravel-mix-purgecss");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    "resources/assets/css/pace-theme-flash.min.css",
    "resources/assets/css/alertify.min.css"
], "public/css/vendor.css");

mix.scripts([
        "resources/assets/js/pace.min.js",
        "resources/assets/js/sticky-sidebar.min.js",
        "resources/assets/js/alertify.min.js"
    ], "public/js/vendor.js")
    .scripts("resources/assets/js/app.js", "public/js/app.js");

mix.postCss("resources/assets/css/main.css", "public/css", [
        tailwindcss("./tailwind.js")
    ])
    .purgeCss();

if (mix.inProduction()) {
    mix.version();
}
