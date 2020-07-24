<?php
/*
 	Template Name: Home Template
*/
?>

<?php get_header(); ?>

 
<div class="container text-center">
	<a class="btn btn-lg btn-danger" href="http://localhost/medinova/">Got to The Index Page</a>
</div>





<secton class="example">
	<div class="container">
		<div class="row">

<!-- first loop	 -->		
			<?php

			$featured = new WP_Query( 'post_type=post&posts_per_page=1&cat=1,16' );
			if ( $featured->have_posts() ) :
				while( $featured->have_posts() ) : $featured->the_post();
			?>
			<div class="col-12">
				<?php get_template_part( 'template-parts/content', 'featured' );?>
			</div>

			<?php 
				endwhile;
				wp_reset_postdata();
			endif;
		
//Second loop	
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 2,
				'category_not_in' => array( 8 ),
				'category_in' => array( 1,16 ),
				'offset' => 1,
			);

			$secondary = new WP_Query( $args );
			if ( $secondary->have_posts() ) :
				while( $secondary->have_posts() ) :
					$secondary->the_post();
			?>
			<div class="col-sm-6">
				<?php get_template_part( 'template-parts/content', 'secondary' );?>
			</div>

			<?php 
				endwhile;
				wp_reset_postdata();
			endif;
			?>

		</div>
	</div>
</secton>


<?php get_footer(); ?>