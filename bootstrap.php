<?php

require_once 'config.php';

function load_lib($class_name){
	$class_file = PATH_LIB . $class_name . CLASS_EXTENSION;
	if(is_file($class_file)){
		require_once $class_file;
	}
}

function load_trait($trait_name){
	$trait_file = PATH_LIB . $trait_name . TRAIT_EXTENSION;
	if(is_file($trait_file)){
		require_once $trait_file;
	}
}

function load_model($class_name){
	$class_file = PATH_MODEL . $class_name . CLASS_EXTENSION;
	if(is_file($class_file)){
		require_once $class_file;
	}
}



spl_autoload_register('load_lib');
spl_autoload_register('load_trait');
spl_autoload_register('load_model');
