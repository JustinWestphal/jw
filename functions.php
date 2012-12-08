<?php
/**
 * JW functions and definitions
 *
 *
 * @package WordPress
 * @subpackage JW
 */
// Add meta box goes into our admin_init function

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Portfolio Piece' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);

}



;?>