<?php
/*
	The Brauxel Code Theme Functions
	By: Aakash Bhatia <akash.bhatia1184@gmail.com>
	Company: The Brauxel Code <http://thebrauxelcode.com/>
*/

function loadMyScripts() {
	if ( !is_admin() ) {
		// Register CSS
		wp_enqueue_style( 'finfeed', get_bloginfo( 'template_url' ) . '/css/thebrauxelcode.css', null, '1.0.0', 'all' );
	
		// Register JavaScript
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery', get_bloginfo( 'template_url' ) . '/js/jquery.js', null, '3.0.0' );
		wp_enqueue_script( 'core', get_bloginfo( 'template_url' ) . '/js/core.js', array( 'jquery' ), '1.0.0', true );
	}
}

add_action( 'wp_enqueue_scripts', 'loadMyScripts' );

// Add Stylesheet to WYSIWYG Editor
//add_editor_style( 'editor.css' );

// Regsiter Main Menu
register_nav_menus( array(
	'main' => 'Main Menu',
	'social-icons' => 'Social Icons',
	'footer-menu' => 'Footer Menu'
));

// Enable Featured Images in posts (Blog)
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}
?>