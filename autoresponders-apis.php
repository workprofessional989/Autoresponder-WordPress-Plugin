<?php
/*
Plugin Name: Autoresponders  Apis
Plugin URI: https://www.fullstackmonks.com/
Description: Integraion of multiple 3rd party Autoresponders to collect leads
Version: 1.0
Author: Sunny Goyal
*/



if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

	add_action('admin_menu', 'admin_menu');
	
	/*
	*  admin_menu
	*
	*  This function will add the ACF menu item to the WP admin
	*
	*  @type	action (admin_menu)
	*  @date	28/09/13
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function admin_menu() {	
		
	
		// add parent
		add_menu_page(
				'Autoresponders',
				'Autoresponders',
				"manage_options",
				'autoresponders_settings',
				'autoresponders_view',
				'dashicons-email',
				'11'
			);		
		
		// add children
		add_submenu_page(
					'autoresponders_settings', 
					'Lead Form',
					'Lead Form',
					'manage_options',
					'autoresponders_form',
					'autoresponders_form_genrate'
				);		

		
	}
	
	
		
		
	function autoresponders_form_genrate() {		
		
		include('includes/lead_form.php');
		
	}
	
	
	function autoresponders_ajax_request() {
		
		include('includes/autoresponders_leads.php');
		
	}
	
	add_action( 'wp_ajax_autoresponders_ajax_request', 'autoresponders_ajax_request' );	 
	// If you wanted to also use the function for non-logged in users (in a theme for example)
	add_action( 'wp_ajax_nopriv_autoresponders_ajax_request', 'autoresponders_ajax_request' );	
	
	function autoresponders_view() {	
		
		include('includes/integratons.php');
		
	}
	
	function add_my_css_and_my_js_files(){
		
			wp_enqueue_style( 'your-stylesheet-name', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, '1.0.0', 'all');
		}
	add_action('wp_enqueue_scripts', "add_my_css_and_my_js_files");
function shapeSpace_include_custom_jquery() {

	
	wp_enqueue_script('jquery'); 
	wp_enqueue_script( 'ajax-script', plugins_url( 'js/leaddata.js', __FILE__ ), array('jquery'), 999, true);
    wp_localize_script( 'ajax-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	wp_register_style( 'namespace', 'https://fonts.googleapis.com/css?family=Open+Sans:700&display=swap' );
	wp_register_style( 'namespace', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=1.0.0' );
    wp_enqueue_style( 'namespace' );
    wp_enqueue_style( 'font-awesome' );
}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
	
	
	
	
	
	
function AutorespondersShortcode( $atts = array() ) {
  ob_start();


  include('includes/autorespondersshortcode.php');

  return ob_get_clean();
	
	
}
add_shortcode('autoresponders', 'AutorespondersShortcode'); 
	
	

?>