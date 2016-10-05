<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://thebrauxelcode.com/
 * @since      1.0.0
 *
 * @package    Social_Media_Stream
 * @subpackage Social_Media_Stream/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Social_Media_Stream
 * @subpackage Social_Media_Stream/includes
 * @author     Aakash Bhatia <aakash@stocksdigital.com>
 */
class Social_Media_Stream_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'social-media-stream',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
