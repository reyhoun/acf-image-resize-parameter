<?php

/*
Plugin Name: Advanced Custom Fields: Image Resize Parameter
Plugin URI: https://github.com/reyhoun/acf-image-resize-parameter
Description: Get Image Resize Parameter from user.
Version: 1.0.0
Author: Reyhoun Team
Author URI: http://reyhoun.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-image_resize_parameter', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_image_resize_parameter( $version ) {
	
	include_once('acf-image-resize-parameter-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_image_resize_parameter');	

?>