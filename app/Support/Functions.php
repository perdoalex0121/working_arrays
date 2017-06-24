<?php 

use App\Support\ArraysFunctions as Helpers;

function array_get($array, $key, $default = null){
	return Helpers::get($array, $key, $default);
}

function array_first($array, $callback = null, $default = null){
	return Helpers::first($array, $callback, $default);
}

function array_last($array, $callback = null, $default = null){
	return Helpers::last($array, $callback, $default);
}

function array_where($array, $callback){
	return Helpers::where($array, $callback);
}

function array_only($array, $key){
	return Helpers::only($array, $key);
}

function array_have($array, $key){
	return Helpers::have($array, $key);
}