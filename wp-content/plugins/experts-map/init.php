<?php

/*
Plugin Name: Local Experts Map
Description: Local experts map plugin
Author: Dimitar Tsonev
Version: 1
*/

define( 'EXPERTS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'EXPERTS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

if ( !function_exists( 'add_action' ) ) {
	echo 'Hello cheater, please dont call me directly';
	exit;
}

require_once( EXPERTS_PLUGIN_DIR . '/includes/Actions/register-expert-post-type.php' );
require_once( EXPERTS_PLUGIN_DIR . '/includes/Actions/register-acf-custom-fields.php' );
require_once( EXPERTS_PLUGIN_DIR . '/includes/Actions/register-acf-blocks.php' );
require_once( EXPERTS_PLUGIN_DIR . '/includes/Helper/assetsLoader.php' );
require_once( EXPERTS_PLUGIN_DIR . '/includes/config.php' );

class Loader{

	public function __construct(){

		register_activation_hook(__FILE__, array( $this, 'plugin_activate' ));
		
	}

	public function plugin_activate(){

		if ( ! is_plugin_active ( 'advanced-custom-fields-pro/acf.php' ) ) {

			@trigger_error(__(' Please enable first ACF Pro', 'ap'), E_USER_ERROR);	
			return false ;
		}
	}
}

$boot = new Loader();