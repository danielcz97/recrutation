<?php

function create_posttypes() {

	register_post_type( 'jobs',
		array(
			'labels' => array(
				'name' => __( 'Oferty pracy' ),
				'singular_name' => __( 'Oferta pracy' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'jobs'),
			'show_in_rest' => true,
		)
	);

	register_post_type( 'candidate',
		array(
			'labels' => array(
				'name' => __( 'Lista kandydatów' ),
				'singular_name' => __( 'Kandydat' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'candidate'),
			'show_in_rest' => true,

		)
	);
}
add_action( 'init', 'create_posttypes' );

function custom_shortcode()  {
	$content_from_plugin = get_option('plugin-form');
	echo html_entity_decode($content_from_plugin);

}
add_shortcode('customshortcode', 'custom_shortcode');

