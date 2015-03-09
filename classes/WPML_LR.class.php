<?php

/**
 * Main class of WPML LR plugin
 *
 * @author konrad
 */
class WPML_LR {
	
	function __construct() {	
		add_action('init', array($this, 'verify_wpml'));
	}
	
	function verify_wpml() {
		$LR_Sitepress = new LR_Sitepress();
		if ( ! $LR_Sitepress->is_wpml_active() ) {
			add_action( 'admin_notices', array($this, 'notice_no_wpml') );
		}
	}
}
