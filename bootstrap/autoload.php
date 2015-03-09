<?php

/* 
 * Autload register function
 */


function wpml_lr_autoload($class) {
	if (!defined('WPML_LR_CLASS_DIR')) {
		return;
	}
	
	$class_file_path = WPML_LR_CLASS_DIR . DIRECTORY_SEPARATOR . $class . ".class.php";
	
	if((file_exists($class_file_path) === false) || (is_readable($class_file_path) === false)) {
			return false;
	}
	
	require_once $class_file_path;
	
}

spl_autoload_register('wpml_lr_autoload');

