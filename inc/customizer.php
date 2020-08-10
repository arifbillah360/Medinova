<?php 
 function medinova_customizer( $wp_customize ){

 	//copyright Text
 	$wp_customize-> add_section( 'set_copyright', array(
 		'title' => 'Copyright',
 		'description' => 'Please, type here your copyright text'
 	) );
 	$wp_customize-> add_setting( 'set_copyright', array(
 		'type' => 'theme_mod',
 		'default' => 'Copyright X - All Right Reserved',
 		'transport'         => 'postMessage',
 		'sanitize_callback' => 'esc_attr',
 	) );
 	$wp_customize-> add_control( 'ctrl_copyright', array(
 		'label' => 'Copyright information',
 		'description' => 'Please, Type your copyright here.',
 		'section' => 'set_copyright',
 		'settings' => 'set_copyright',
 		'type' => 'text',
 	) );

//ADDRESS AND PHONE NUMBER

 	 $wp_customize-> add_section( 'set-comunication', array(
 		'title' => 'Address & Phone',
 		'description' => 'Type here Address & Phone No.'
 	) );
 	 //address
 	$wp_customize-> add_setting( 'set_address', array(
 		'type' => 'theme_mod',
 		'default' => 'Reserved',
 		'transport'         => 'postMessage',
 		'sanitize_callback' => 'esc_attr',
 	) );
 	$wp_customize-> add_control( 'ctrl_address', array(
 		'label' => 'Copyright information',
 		'description' => 'Please, Type your copyright here.',
 		'section' => 'set_comunication',
 		'settings' => 'set_address',
 		'type' => 'text',
 	) );

 	//address details
	$wp_customize->add_setting( 'set_address_desc' , array(
		'type' => 'theme_mod',
	    'default'     => 'Dhaka',
	    'transport'         => 'postMessage',
		'sanitize_callback' => 'esc_attr',
	) );
	$wp_customize->add_control( 'new_set_address_desc', array(
	    'label' => 'Address information or details',
	   	'description' => 'Please, Do not change this defult value',
		'section'	=> 'set-comunication',
		'settings' => 'set_address_desc',
		'type'	 => 'text',
		) );
	//Phone Number
 	
 }

 	add_action( 'customize_register',  'medinova_customizer' );
