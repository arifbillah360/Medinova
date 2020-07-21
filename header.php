<!DOCTYPE html>
<html<?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head();?>
</head>
<body<?php body_class();?>>
<?php echo get_custom_logo(); ?>
<div class="main-menu">
	<div class="container">
		<?php wp_nav_menu(
			array(
				'theme_location' => 'my_main_menu'
			)
		);?>
	</div>
</div>
<!-- <div class="search">
	<div class="container">
		
		<?php get_search_form(); ?>
	</div>
</div> -->