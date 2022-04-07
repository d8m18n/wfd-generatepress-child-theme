<?php
/**
 * Register post types used in this theme/site.
 *
 * @package WordPress
 * @subpackage wfd-child
 * @since wfd-child 1.0.0
 */

/**
 * Register site custom post types.
 *
 * @return void
 */
function wfd_custom_post_types() {

	// Testimonials Post Type.
	register_post_type(
		'wfd_testimonial',
		array(
			'labels'      => array(
				'name'          => __( 'Testimonials', 'wfd' ),
				'singular_name' => __( 'Testimonial', 'wfd' ),
				'edit_item'     => __( 'Edit Testimonial', 'wfd' ),
				'all_items'     => __( 'All Testimonials', 'wfd' ),
			),
			'rewrite'     => array(
				'slug' => 'testimonials',
			),
			'public'      => true,
			'has_archive' => false,
			'menu_icon'   => 'dashicons-thumbs-up',
			'supports'    => array(
				'title',
				'thumbnail',
			),
			'taxonomies'  => array( 'category' ),

		)
	);

		// FAQs Post Type.
	register_post_type(
		'wfd_faq',
		array(
			'labels'      => array(
				'name'          => __( 'FAQ', 'wfd' ),
				'singular_name' => __( 'FAQ', 'wfd' ),
				'edit_item'     => __( 'Edit FAQ', 'wfd' ),
				'all_items'     => __( 'All FAQs', 'wfd' ),
			),
			'rewrite'     => array(
				'slug' => 'faq',
			),
			'public'      => true,
			'has_archive' => false,
			'menu_icon'   => 'dashicons-info',
			'supports'    => array(
				'title',
				'thumbnail',
			),
			'taxonomies'  => array( 'category' ),

		)
	);
}
