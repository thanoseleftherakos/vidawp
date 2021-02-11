<?php
if(!function_exists('setup_theme_menu')){
	function setup_theme_menu(){
		register_nav_menus([
			'primary_menu' => __('Main Menu', 'wordify'),
			'footer_menu' => __('Footer Menu', 'wordify')
		]);
	}
	add_action('after_setup_theme', 'setup_theme_menu');
}

add_theme_support('post-thumbnails', array(
	'post',
	'page',
));

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

if ( !function_exists( 'thumb_setup' ) ) {
	function thumb_setup() {
			add_image_size( 'post-thumb', 0, 600, true );
	}
}
add_action( 'after_setup_theme', 'thumb_setup' );