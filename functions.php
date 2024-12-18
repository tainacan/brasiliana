<?php
/*
Theme Name: Brasiliana
Description: Brasiliana Museus - a child theme of Blocksy
Author: wetah
Version: 0.4.4
Text Domain: brasiliana
*/

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/** Child Theme version */
const BRASILIANA_VERSION = '0.4.4';

/* Enqueues necessary JS and CSS files */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'brasiliana-style', get_stylesheet_directory_uri() . '/style.min.css', array('parent-style'), BRASILIANA_VERSION );
	wp_enqueue_style( 'dashicons' ); // Used in some parts of the theme, even if not logged.
	wp_enqueue_script( 'brasiliana-search-scripts', get_stylesheet_directory_uri() . '/js/search-scripts.js', array(), BRASILIANA_VERSION );
});

/* Enqueues block side CSS files */
function brasiliana_editor_side_enqueues() {
	wp_enqueue_style( 'brasiliana-editor-styles', get_stylesheet_directory_uri() . '/editor.min.css', array(), BRASILIANA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'brasiliana_editor_side_enqueues');

/* Theme special features */
function brasiliana_theme_supported_features() {
	add_theme_support( 'custom-units', 'px', 'rem', 'em', '%', 'vh', 'vw' );
	add_theme_support( 'custom-spacing' );
	add_theme_support( 'custom-line-height' );
}
add_action( 'after_setup_theme', 'brasiliana_theme_supported_features' );


// Updates to the search modal
require get_stylesheet_directory() . '/inc/search-modal.php';

// Registers Block styles
require get_stylesheet_directory() . '/inc/block-styles.php';

// Registers Post Types
require get_stylesheet_directory() . '/inc/post-types.php';

// Adds action to inser share and back buttons on headers
require get_stylesheet_directory() . '/inc/elements.php';

// Presets customizer values
require get_stylesheet_directory() . '/inc/customizer.php';

// Filter submission
require get_stylesheet_directory() . '/inc/submission-filters.php';
