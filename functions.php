<?php
/*
Theme Name: Brasiliana
Description: Brasiliana Museus - a child theme of Blocksy
Author: wetah
Version: 0.0.1
Text Domain: brasiliana
*/

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/** Child Theme version */
const BRASILIANA_VERSION = '0.0.1';

/* Enqueues necessary JS and CSS files */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'brasiliana-style', get_stylesheet_uri(), array('parent-style'), BRASILIANA_VERSION );
});

/* Enqueues block side CSS files */
function brasiliana_editor_side_enqueues() {
	wp_enqueue_style( 'brasiliana-editor-styles', get_stylesheet_directory_uri() . '/css/block-styles.css', array(), BRASILIANA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'brasiliana_editor_side_enqueues');

/* Theme special features */
function brasiliana_theme_supported_features() {
	add_theme_support( 'custom-units', 'px', 'rem', 'em', 'vh', 'vw' );
	add_theme_support( 'custom-spacing' );
}
add_action( 'after_setup_theme', 'brasiliana_theme_supported_features' );


// Registers Block styles
require get_stylesheet_directory() . '/inc/block-styles.php';

// Registers Block patterns
require get_stylesheet_directory() . '/inc/block-patterns.php';

// Presets customizer values
require get_stylesheet_directory() . '/inc/customizer.php';
