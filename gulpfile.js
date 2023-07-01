const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
       .webpack('app.js');
    mix.sass('animate.css');
    mix.sass('app.css');
    mix.sass('bootstrap.css');
    mix.sass('style.css');
    mix.sass('swipebox.css');
    
    mix.webpack('easing.js');
    mix.webpack('jquery.swipebox.min.js');
    mix.webpack('jquery-1.11.1.min.js');
    mix.webpack('move-top.js');
    mix.webpack('wow.min.js');
    
    mix.webpack('jquery.min.js');
});
