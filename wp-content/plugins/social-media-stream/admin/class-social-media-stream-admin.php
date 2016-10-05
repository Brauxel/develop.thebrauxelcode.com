<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://thebrauxelcode.com/
 * @since      1.0.0
 *
 * @package    Social_Media_Stream
 * @subpackage Social_Media_Stream/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Social_Media_Stream
 * @subpackage Social_Media_Stream/admin
 * @author     Aakash Bhatia <aakash@stocksdigital.com>
 */
class Social_Media_Stream_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->construct_table();

	}
	
	/**
	 * Register the construct table (sms) in DB for the admin area.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function construct_table() {
		global $wpdb;
		
		$table_name = $wpdb->prefix . "sms";
		// Add the DB ver for future expansion
		add_option('sms_db_version', 1, '', no);
		
		$charset_collate = $wpdb->get_charset_collate();
		$sql = "CREATE TABLE $table_name (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			name tinytext NOT NULL,
			slug varchar(55) DEFAULT '' NOT NULL,
			text text NOT NULL,
			PRIMARY KEY  (id)
		) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
		
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Social_Media_Stream_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Social_Media_Stream_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/social-media-stream-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Social_Media_Stream_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Social_Media_Stream_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/social-media-stream-admin.js', array( 'jquery' ), $this->version, false );

	}
	
	/**
	 * Register the Settings for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function social_media_stream_menu() {
		add_options_page( 'Social Media Stream Options', 'Social Media Stream Settings', 'manage_options', 'social-media-stream-options', 'social_media_stream_options' );
	}
}

/**
 * Render the Settings for the admin area.
 *
 * @since    1.0.0
 */
function social_media_stream_options() {
	// Check to see if current user has the required permission
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	
	include('partials/social-media-stream-admin-display.php');
}
