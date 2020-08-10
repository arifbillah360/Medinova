<?php get_header();?>
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
<!-- Information Box -->
<div id="information" class="text-center py-4">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="time-table">
					<h3><?php echo $reduxmedinova['information-title1'] ?></h3>
					<p><?php echo $reduxmedinova['information-desc1'] ?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="appointment">
					<h3><?php echo $reduxmedinova['information-title2'] ?></h3>
					<p><?php echo $reduxmedinova['information-desc2'] ?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="working-hour">
					<h3><?php echo $reduxmedinova['information-title3'] ?></h3>
					<p><?php echo $reduxmedinova['information-desc3'] ?></p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Meet our Doctor -->
<div id="meet-doctor" class="text-center py-5 jumbotron">
	<div class="container">
		<h1>Meet Our Doctor</h1>
		<div class="mm-line1"></div>
		<div class="row">
			<div class="col-md-9">
				<?php echo $reduxmedinova['temp-editor']?>
			</div>
			<div class="col-md-3 col-sm-12">
				<h4>Medinova Malibagh Android APP</h4>
				<p>	Stay connected with Hospitals with the Medinova Now app. This mobile application, available on Android.</p>
				<a href="#" class="btn btn-danger">Download <i class="fa fa-download" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>
<!-- Doctor Slide -->
<div id="doctor-slide">
	
</div>

<!-- YOUTUBE AND FACEBOOK  POST -->
<div id="social-automation" class="text-center py-5">
	<div class="container">
		<h1>Social Media Automation</h1>
		<div class="mm-line1"></div>
		<div class="row">
			<div class="col-md-6 col-sm-12">
			<h3>Health Advices</h3>
			<div class="mm-line1"></div>
			<?php
			$yt = $reduxmedinova['youtube-automation'];
			echo do_shortcode($yt);
			?>
			</div>
			<div class="col-md-6 col-sm-12">
				<h3>Facebook Feed</h3>
				<div class="mm-line1"></div>
				<?php echo $reduxmedinova['facebook-automation']?>
			</div>
		</div>
	</div>
</div>


<!-- Counter -->
<div id="mm-counter" class="text-center bg-medinova py-4">
	<div class="container">
		<h1>Animated Counter</h1>
		<div class="mm-line1"></div>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div>
					<i class="fab fa-youtube fa-4x"></i>
					<div class="counter" data-target="27000">0</div>
					<h3>Subscribers</h3>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div>
					<i class="fab fa-facebook fa-4x"></i>
					<div class="counter" data-target="9000">0</div>
					<h3>Likes</h3>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div>
					<i class="fa fa-user fa-4x"></i>
					<div class="counter" data-target="6000">0</div>
					<h3>Patient</h3>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div>
					<i class="fa fa-user-md fa-4x"></i>
					<div class="counter" data-target="58">0</div>
					<h3>Doctors</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Leates News section -->
<div id="latest-news" class="text-center py-5 bg-main">
	<div class="container">
		<h1>Medical News</h1>
		<div class="mm-line1"></div>
		<div class="row">	
			<?php		
//Second loop	
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'category_not_in' => array( 8 ),
				'category_in' => array( 1,16 ),
				// 'offset' => 2,
			);

			$secondary = new WP_Query( $args );
			if ( $secondary->have_posts() ) :
				while( $secondary->have_posts() ) :
					$secondary->the_post();
			?>
			<div class="col-md-4 col-sm-12">
				<?php get_template_part( 'template-parts/content', 'secondary' );?>
			</div>

			<?php 
				endwhile;
				wp_reset_postdata();
			endif;
			?>

		</div>
	</div>
</div>






<?php get_footer();?>
