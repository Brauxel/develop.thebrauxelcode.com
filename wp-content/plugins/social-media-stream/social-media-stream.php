<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://thebrauxelcode.com/
 * @since             1.0.0
 * @package           Social_Media_Stream
 *
 * @wordpress-plugin
 * Plugin Name:       Social Media Stream
 * Plugin URI:        http://stocksdigital.com/
 * Description:       This plugin displays a feed on the site from different social media accounts
 * Version:           1.0.0
 * Author:            Aakash Bhatia
 * Author URI:        http://thebrauxelcode.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       social-media-stream
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-social-media-stream-activator.php
 */
function activate_social_media_stream() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-social-media-stream-activator.php';
	Social_Media_Stream_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-social-media-stream-deactivator.php
 */
function deactivate_social_media_stream() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-social-media-stream-deactivator.php';
	Social_Media_Stream_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_social_media_stream' );
register_deactivation_hook( __FILE__, 'deactivate_social_media_stream' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-social-media-stream.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_social_media_stream() {

	$plugin = new Social_Media_Stream();
	$plugin->run();

}
run_social_media_stream();
