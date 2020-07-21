<?php
//stylesheet and scripts
	function load_scripts(){
		wp_enqueue_style('styleheet', get_stylesheet_uri(), array(), '4.0.4');
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.0.4', 'all');
		wp_enqueue_script('myscripts', get_template_directory_uri(). '/assets/js/main.js', array('jquery'), '3.0.0', true);
	}
	add_action('wp_enqueue_scripts', 'load_scripts');

	function medinova_confiq(){
		add_theme_support('post-thumbnails');
		add_theme_support('post-formats', array('video', 'image'));
		add_theme_support('title-tag');	
		// add_theme_support('');	
		// add_theme_support('');



	//menu register	
		register_nav_menus(
			array(
				'my_main_menu' => 'Main Menu',
				'mobile_menu' => 'mobile_menu'
			)
		);
	}
	add_action('after_setup_theme', 'medinova_confiq');

//Widgets area
	add_action('widgets_init', 'medinova_sidebars');
	function medinova_sidebars(){
		register_sidebar(
			array(
				'name' => 'Post Page SideBar',
				'id' => 'post-sidebar-1',
				'description' => 'This is a post page sidebar',
				'befor_widget' => '<div class="widgets-wrapper">',
				'after_widget' => '</div>',
				'befor_title' => '<h2 class="widgets-title">',
				'after_title' => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name' => 'Post Page SideBar 2',
				'id' => 'post-sidebar-2',
				'description' => 'This is a post page sidebar',
				'befor_widget' => '<div class="widgets-wrapper">',
				'after_widget' => '</div>',
				'befor_title' => '<h2 class="widgets-title">',
				'after_title' => '</h3>',
			)
		);
	}