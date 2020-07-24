<?php 
 function medinova_customizer( $wp_customize ){
 	$wp_customize-> add_section( 'set_copyright', array(
 		'title' => 'Copyright',
 		'description' => 'Please, type here your copyright text'
 	) );
 	$wp_customize-> add_setting( 'set_copyright', array(
 		'type' => 'theme_mod',
 		'default' => 'Copyright X - All Right Reserved',
 		'sanitize_callback' => 'esc_attr'
 	) );
 	$wp_customize-> add_control( 'ctrl_copyright', array(
 		'label' => 'Copyright information',
 		'description' => 'Please, Type your copyright here.',
 		'section' => 'set_copyright',
 		'settings' => 'set_copyright',
 		'type' => 'text'
 	) );

 }

 	add_action( 'customize_register',  'medinova_customizer' );
