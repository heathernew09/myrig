<?php
/**
 * WP_Rig\WP_Rig\ACF\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\ACF;

use WP_Rig\WP_Rig\Component_Interface;
use function add_action;

/**
 * Class for implementing ACF theme options support.
 */
class Component implements Component_Interface{

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'acf';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'after_setup_theme', array( $this, 'add_acf_theme_options' ), 10, 2 );
	}
	/**
	 *  Adds ACF Options Menu 
	 * */
	public function add_acf_theme_options() {
		if( function_exists('acf_add_options_page') ) {
			acf_add_options_page();
		}
	}
	// Register acf fields to Wordpress API
	// https://support.advancedcustomfields.com/forums/topic/json-rest-api-and-acf/

	function acf_to_rest_api($response, $post, $request) {
		if (!function_exists('get_fields')) return $response;

		if (isset($post)) {
			$acf = get_fields($post->id);
			$response->data['acf'] = $acf;
		}
		return $response;
	}
}