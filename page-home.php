<?php get_header();?>
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
<!-- Information Box -->
<div id="information" class="text-center p-4">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="time-table">
					<h3>Time Table</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quo, aspernatur quos. Quos aliquam reprehenderit, provident expedita vel eveniet itaque dolor saepe.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="appointment">
				<h3>Appointment</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex pariatur, molestiae dolorem, odio quo alias doloremque, doloribus soluta, maxime non fugit quos?</p>		
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="working-hour">
					<h3>Working Hour</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem deserunt aut modi accusamus est delectus doloremque nulla repudiandae cum quam esse, iusto sit.</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Meet our Doctor -->
<div id="meet-doctor" class="text-center p-5 jumbotron">
	<div class="container">
		<h1>Meet Our Doctor</h1>
		<div class="mm-line1"></div>
		<p class="lorem40">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus doloremque dolorum dolorem enim quasi natus, ab sapiente exercitationem deserunt autem obcaecati animi nobis voluptatum iusto eum aliquam voluptatibus repudiandae ducimus, fugiat sunt mollitia aliquid consectetur. Voluptate tempore, repudiandae non suscipit ad, blanditiis et doloribus iusto similique ipsum, accusamus vero atque laborum accusantium! Impedit eum, unde, voluptate voluptas magni asperiores fuga reprehenderit adipisci ut numquam, iusto nihil molestiae. Placeat architecto facere ut, possimus, quibusdam tempore consequuntur veniam in ducimus repellendus debitis tempora voluptatibus perferendis, voluptate nisi illum quo molestiae sit, nostrum totam vero provident! Et cumque provident culpa voluptas modi a sint quo inventore, cum ducimus quisquam dolorem cupiditate aliquid vero?
		</p>
	</div>
</div>
<!-- Doctor Slide -->
<div id="doctor-slide">
	
</div>

<!-- Counter -->
<div id="counter">
	
</div>
<!-- YOUTUBE AND FACEBOOK  POST -->
<div id="social-media" class="text-center p-5">
	<div class="container">
		<h1>Social Post Automation</h1>
		<div class="mm-line1"></div>
		<div class="row">
			<div class="col-md-6 col-sm-12">
		<!-- 		<?php
				echo do_shortcode('[fts_youtube vid_count=6 large_vid=yes large_vid_title=no large_vid_description=no thumbs_play_in_iframe=yes vids_in_row=3 omit_first_thumbnail=no space_between_videos=2px force_columns=no maxres_thumbnail_images=yes thumbs_wrap_color=#fff channel_id=UCdIiQv9EbGK8eg0jJQJAluw]');
				?> -->			
			</div>
			<div class="col-md-6 col-sm-12">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta cupiditate, totam eveniet quidem doloremque similique nam deserunt, explicabo in perspiciatis, at cum soluta officiis iusto accusantium quos eius, asperiores quasi necessitatibus placeat nesciunt debitis! Perferendis numquam sed ab, dicta aliquid, voluptas iste molestias et nulla officiis, fugit eius, quam dolorum!</p>
			</div>
		</div>
	</div>
</div>

<!-- Leates News section -->
<div id="latest-news" class="text-center p-5 bg-main">
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
