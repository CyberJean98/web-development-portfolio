<?php
/**
 * Northbound Roofing theme setup.
 *
 * @package Northbound Roofing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function northbound_enqueue_styles() {
	wp_enqueue_style( 'northbound-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'northbound_enqueue_styles' );

function northbound_editor_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'northbound_editor_styles' );

function northbound_pattern_categories() {
	register_block_pattern_category( 'northbound', array( 'label' => __( 'Northbound Roofing', 'northbound' ) ) );
}
add_action( 'init', 'northbound_pattern_categories' );
