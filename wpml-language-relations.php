<?php
/* 
Plugin name: WPML Language Relations
Description: Display and manage posts and pages related by language
Version: 0.1
 */

if (defined('WPML_LR_ACTIVE') && WPML_LR_ACTIVE) {
	return;
}

define( 'WPML_LR_ACTIVE', true);
define( 'WPML_LR_VERSION', '0.1' );
define( 'WPML_LR_PATH', rtrim(dirname( __FILE__ ), DIRECTORY_SEPARATOR) );
define( 'WPML_LR_BOOSTRAP_DIR', WPML_LR_PATH . DIRECTORY_SEPARATOR . "bootstrap");
define( 'WPML_LR_CLASS_DIR', WPML_LR_PATH . DIRECTORY_SEPARATOR . "classes");

require_once WPML_LR_BOOSTRAP_DIR . '/autoload.php';

$WPML_LR = new WPML_LR;



