<!DOCTYPE html>
<html<?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head();?>
</head>
<body<?php body_class();?>>
<?php global $reduxmedinova; ?>
<div id="thead" class="top-head">
	<div class="container">
		<div class="row">
			<div class="col-5">
				<ul class="mm-social">
					<li class="facebook"><a href="<?php echo $reduxmedinova['sicon']['facebook']?>"><i class="fab fa-facebook-square"></i></a></li>
					<li class="twitter"><a href="<?php echo $reduxmedinova['sicon']['twitter']?>"><i class="fab fa-twitter-square"></i></a></li>
					<li class="youtube"><a href="<?php echo $reduxmedinova['sicon']['youtube']?>"><i class="fab fa-youtube"></i></a></li>
					<!--<li><a href="#"><i class="fab fa-linkedin"></i></a></li>-->
				</ul>
			</div>
			<div class="col-7">
			<div class="mm-button">
				<a href="<?php echo $reduxmedinova['mmcall-us']['Appointment'] ?>" class="btn btn-success btn-sm align-middle">Appointment</a>
				<a href="tel:<?php echo $reduxmedinova['mmcall-us']['Call Us'] ?>" class="btn btn-danger btn-sm align-middle">Call Us</a>			
			</div>
			</div>
		</div>
	</div>
</div>

<div id="communication" class="text-center py-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6">
				<div class="mm-address py-3">
					<h4><?php echo $reduxmedinova['address-title'];?></h4>
					<p><?php echo $reduxmedinova['address-desc'];?></p>
				</div>
			</div>
			<div class="col-6">
				<div class="mm-phone py-3">
					<h4><?php echo $reduxmedinova['phone-title'];?></h4>
					<p><?php echo $reduxmedinova['phone-desc'];?></p>
				</div>
			</div>
		</div>
	</div>
</div>



<div id="menu" class="">
	<div class="container">
		<div class="row">
			<div class="col-9">
				<div class="main-menu">
					<div class="container">
						<?php wp_nav_menu(
							array(
								'theme_location' => 'my_main_menu'
							)
						);?>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="mm-logo float-right">
					<?php if ( function_exists( 'the_custom_logo' ) ) {
					 the_custom_logo();
					} ?>
				</div>
			</div>
		</div>
	</div>
</div>



