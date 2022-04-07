<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wfd
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_DEV_MODE', true );

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function wfd_load_assets() {
	$ver = CHILD_DEV_MODE ? time() : false;
	wp_enqueue_script(
		'wfd-scripts',
		get_theme_file_uri( '/build/index.js' ),
		array( 'wp-element' ),
		$ver,
		true
	);
	wp_enqueue_style(
		'wfd-style',
		get_theme_file_uri( '/build/style-index.css' ),
		wp_get_theme()->get( 'Version' ),
		$ver,
		'all'
	);
}
add_action( 'wp_enqueue_scripts', 'wfd_load_assets' );

/**
 * Theme setup
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'wfd_setup' ) ) {
	/**
	 * Setup required theme support - change if necessary.
	 *
	 * @since 1.0.0
	 */
	function wfd_setup() {
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'responsive-embeds' );
			add_theme_support( 'wp-block-styles' );
			add_theme_support( 'editor-styles' );
			add_editor_style( '/build/index.css' );
	}
}
add_action( 'after_setup_theme', 'wfd_setup' );

/**
 * Includes
 */
require_once get_theme_file_path( '/includes/front/theme-mods.php' );
require_once get_theme_file_path( '/includes/front/footer-credit.php' );
require_once get_theme_file_path( '/includes/front/seofunctions.php' );
require_once get_theme_file_path( '/includes/front/custom-post-types.php' );

/**
 * Hooks
 */
add_action( 'init', 'wfd_custom_post_types' );
add_action( 'generate_after_primary_menu', 'wfd_add_header_button', 10 );
add_filter( 'generate_copyright', 'wfd_custom_copyright' );
add_filter( 'get_avatar', 'wfd_gravatar_alt' );
