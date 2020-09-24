<?php

function custom_post_type() {
	register_post_type('resolucoes', array(
		'labels' => array(
			'name' => 'Resoluções 2',
			'singular_name' => 'Resolução',
			
		),
		'public' => true,
		'has_archive' => true,
		'manu_icon' => 'dashicons-ellipsis',
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'comments', 'custom-fields'),
		'taxonomies'          => array( 'category' ),
	));
};
add_action('init', 'custom_post_type');
function images_side_bar() {
	register_post_type('images', array(
		'labels' => array(
			'name' => 'Imagens',
			'singular_name' => 'Imagens',
			
		),
		'public' => true,
		'has_archive' => true,
		'manu_icon' => 'dashicons-ellipsis',
		'supports' => array('thumbnail', 'custom-fields'),
	));
};

add_action('init', 'images_side_bar');


