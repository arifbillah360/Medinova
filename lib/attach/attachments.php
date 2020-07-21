<?php

define( 'ATTACHMENTS_SETTINGS_SCREEN', false ); // disable the Settings screen
add_filter( 'attachments_default_instance', '__return_false' ); // disable the default instance

function medinova_team($attachments) {
	$fields = array(
		array(
			'name' => 'title',
			'type' => 'text',
			'label' => __('Name', 'medinova')
		),
			array(
			'name' => 'subtitle',
			'type' => 'text',
			'label' => __('Sub-title', 'medinova')
		),
			array(
			'name' => 'about',
			'type' => 'textarea',
			'label' => __('About', 'medinova')
		)

	);

	$args = array(
		'label' => 'Team Members',
		'post_type' => array('page'), //post o use korte parbo
		'filetype' => array('image'),
		'note' => 'add your team member',
		'fields' => $fields
	);
	$attachments->register( 'team', $args );
}
add_action('attachments_register', 'medinova_team');