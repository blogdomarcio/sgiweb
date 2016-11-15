const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');



elixir(function(mix) {

    mix.scripts([
        '/../../../node_modules/jquery/dist/jquery.js',
        '/../../../node_modules/bootstrap/dist/js/bootstrap.js',
        '/../../../node_modules/vue/dist/vue.js',
        '/../../../node_modules/vue-resource/dist/vue-resource.js',
        '/../../../node_modules/instant-icons/icons.js',
        'app.js',
        'bootstrap.js'

], 'public/js/app.js');

    mix.styles([
        'dashboard.css',
        '/../../../node_modules/bootstrap/dist/css/bootstrap.css',
        '/../../../node_modules/font-awesome/css/font-awesome.css'],

        'public/css/app.css');

    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');



});
