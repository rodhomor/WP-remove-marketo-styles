<?php
/*
Plugin Name:	Remove Marketo Form Styles
Plugin URI:		
Description:	This plugin removes unneeded divs, inline styles, and forced CSS style sheets when embedding Marketo forms into your page, so your Marketo form styles will use your site's CSS form styles exclusively.      
Version:		1.0.0
Author:			Rod Homor
Author URI:		http://www.rodhomor.com/
Text Domain:	remove_mkto_styles
License:		GPL3
 
This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.
 
This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with This plugin. If not, see https://www.gnu.org/licenses/gpl-3.0.en.html
*/

if ( !class_exists( 'RemoveMarketoStyles' ) ) {
	
    class RemoveMarketoStyles
    {
		var $remove_mkto_styles_js_file;
			
		public function __construct() {
			$this->remove_mkto_styles_js_file = '/remove-marketo-styles/assets/remove-mkto-styles.js';
        }
		
		public function remove_mkto_styles_enque_js() {
			wp_enqueue_script( 'remove_mkto_styles', plugins_url() . $this->remove_mkto_styles_js_file, array('jquery'), '1.0.0', true );
        }
		
    }
	
	$remove_mkto_styles = new RemoveMarketoStyles();
	add_action('wp_enqueue_scripts', array($remove_mkto_styles, 'remove_mkto_styles_enque_js'), 10 );
	
} // end.

