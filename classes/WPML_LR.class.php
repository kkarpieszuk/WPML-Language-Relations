<?php

/**
 * Main class of WPML LR plugin
 *
 * @author konrad
 */
class WPML_LR {

	private $LR_Sitepress;
	private $LR_Menu_Page;
	
	public function __construct() {
		$this->LR_Sitepress = new LR_Sitepress();
		$this->LR_Menu_Page = new LR_Menu_Page();

		add_action('init', array($this, 'verify_wpml'));
		add_action( 'admin_menu', array( $this, 'add_menu_pages' ) );
	}

	public function add_menu_pages() {
		add_posts_page( __("Language relations", "LR"), __("Language relations", "LR"), "edit_posts", "language-relations", array( $this->LR_Menu_Page, 'page_callback') );
	}
	
	function verify_wpml() {
		if ( ! $this->LR_Sitepress->is_wpml_active() ) {
			add_action( 'admin_notices', array($this, 'notice_no_wpml') );
		}
	}
}
