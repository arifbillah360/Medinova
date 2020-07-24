<?php
//stylesheet and scripts
	function load_scripts(){
		wp_enqueue_style('styleheet', get_stylesheet_uri(), array(), '4.0.4');
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.0.4', 'all');
		wp_enqueue_style( 'font-awesome-5', 'https://use.fontawesome.com/releases/v5.3.0/css/all.css', array(), '5.3.0' );
		wp_enqueue_script('myscripts', get_template_directory_uri(). '/assets/js/main.js', array('jquery'), '3.0.0', true);
	}
	add_action('wp_enqueue_scripts', 'load_scripts');

	function medinova_config(){
		add_theme_support('post-thumbnails');
		add_theme_support('post-formats', array('video', 'image'));
		add_theme_support('title-tag');	
		// add_theme_support('');	
		// add_theme_support('');



//Custom logo 
		$medinova_logo = array(
			'width' => 300,
			'height' => 300,
			// 'flex-height' => true,
			// 'flex-width' => true
		);
		add_theme_support("custom-logo", $medinova_logo);
//menu register	
		register_nav_menus(
			array(
				'my_main_menu' => 'Main Menu',
				'footer_menu' => 'Footer Menu'
			)
		);
	}
	add_action('after_setup_theme', 'medinova_config');

//Widgets area
	function medinova_sidebars(){
		register_sidebar(
		array(
			'name'          => __( 'Medinova SideBar', 'medinova' ),
			'id'            => 'medinvoa-sidebar',
			'description'   => __( 'Medinova Medical services sidebar', 'medinova' ),
			'before_widget' => '<section id="medinova-sidebar" class="mm-sidebar">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widgets-title">',
			'after_title'   => '</h4>',
		));
		register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'medinova' ),
			'id'            => 'footer-1',
			'description'   => __( '1st footer section', 'medinova' ),
			'before_widget' => '<section id="footer-1" class="footer-area">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widgets-title">',
			'after_title'   => '</h4>',
		));
		register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'medinova' ),
			'id'            => 'footer-2',
			'description'   => __( '2nd footer section', 'medinova' ),
			'before_widget' => '<section id="footer-2" class="footer-area">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widgets-title">',
			'after_title'   => '</h4>',
		));
		register_sidebar(
		array(
			'name'          => __( 'Footer 3', 'medinova' ),
			'id'            => 'footer-3',
			'description'   => __( '3rd footer section', 'medinova' ),
			'before_widget' => '<section id="footer-3" class="footer-area">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widgets-title">',
			'after_title'   => '</h4>',
		));
	}
	add_action('widgets_init', 'medinova_sidebars');




	// Theme Default Customizer
  	require get_template_directory() . '/inc/customizer.php';
  	//TGM-Plugin_activation
  	require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
  	require_once get_template_directory() . '/inc/required-plugins.php';
  	//
