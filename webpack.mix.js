const mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        extensions: [".scss", ".sass", ".wasm", ".mjs", ".js", ".jsx", ".json"]
    }
})
    .js('resources/js/**/*.js', 'public/js')
    .sass('resources/sass/ui/section.scss', 'public/css/ui/');

