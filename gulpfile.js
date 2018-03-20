'use strict';

var gulp = require('gulp');
var elixir = require('laravel-elixir');
var BrowserSync = require('laravel-elixir-browsersync');

elixir(function(mix){
	mix.sass('app.scss');
});