<?php

Class MOP_2015 {
	
	public function __construct() {
		
		add_theme_support( 'post-thumbnails' );
		add_action( 'wp_enqueue_scripts', array( $this, 'load_includes' ) );
		add_action( 'after_setup_theme', array( $this, 'menus' ) );

	}

	public function load_includes() {
		
		wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/includes/bootstrap/css/bootstrap.min.css' );
		wp_enqueue_style( 'mop2015', get_template_directory_uri() . '/assets/css/mop2015.css' );

		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/includes/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.4', true );

		wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax-js/parallax.min.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'mop2015', get_template_directory_uri() . '/assets/js/mop2015.js', array('jquery'), '0.1.0', true );

	}

	public function menus() {
		register_nav_menu( 'side-menu', __( 'Side Menu', 'mop2015' ) );
	}

}

$mop_theme = new MOP_2015();