<?php
/**
 * Lockline Security theme setup.
 *
 * @package Lockline Security
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lockline_enqueue_styles() {
	wp_enqueue_style( 'lockline-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'lockline_enqueue_styles' );

function lockline_editor_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'lockline_editor_styles' );

function lockline_pattern_categories() {
	register_block_pattern_category( 'lockline', array( 'label' => __( 'Lockline Security', 'lockline' ) ) );
}
add_action( 'init', 'lockline_pattern_categories' );
