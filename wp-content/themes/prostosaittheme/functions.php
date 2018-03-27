<?php 

	function pr_script_enqueue() {
		wp_enqueue_style('customstyle', get_template_directory_uri().'/css/main.min.css', array(), '1.0.0','all');
		wp_enqueue_script('customjs', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js', array(), '1.0.0',true);
		wp_enqueue_script('customjs-1', get_template_directory_uri().'/js/jquery.slicknav.min.js', array(), '1.0.0',true);
		wp_enqueue_script('customjs-2', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '1.0.0',true);
		wp_enqueue_script('customjs-3', get_template_directory_uri().'/js/main.js', array(), '1.0.0',true);
	}
	add_action('wp_enqueue_scripts', 'pr_script_enqueue');

	function pr_theme_setup() {
		add_theme_support('menus');
		register_nav_menu('main', 'Main Menu');
	}
	add_action('init', 'pr_theme_setup');






/*
	===============================
		Head function
	===============================
*/	

	function pr_remove_version() {
		return '';
	}
	add_filter('the_generator','pr_remove_version');

	function new_excerpt_length($length) {
		return 10;
	}
	add_filter('excerpt_length', 'new_excerpt_length');


 ?>