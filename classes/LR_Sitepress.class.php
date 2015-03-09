<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LR_Sitepress
 *
 * @author konrad
 */
class LR_Sitepress {
		
	function __construct() {
	}
	
	public function is_wpml_active() {
		return defined('ICL_SITEPRESS_VERSION');
	}
	
	public function get_instance() {
		global $sitepress;
		
		$instance = false;
		
		if (isset($sitepress) && is_a($sitepress, 'SitePress')) {
			$instance = clone $sitepress;
		}
		
		return $instance;
	}
}
