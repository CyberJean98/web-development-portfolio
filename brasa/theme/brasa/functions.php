<?php
/**
 * Brasa theme setup.
 *
 * @package Brasa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load the theme stylesheet (signature components) on the front end and in the editor.
 */
function brasa_enqueue_styles() {
	wp_enqueue_style(
		'brasa-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'brasa_enqueue_styles' );

function brasa_editor_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'brasa_editor_styles' );

/**
 * Pattern category so Brasa's sections are grouped in the inserter.
 */
function brasa_pattern_categories() {
	register_block_pattern_category(
		'brasa',
		array( 'label' => __( 'Brasa', 'brasa' ) )
	);
}
add_action( 'init', 'brasa_pattern_categories' );
