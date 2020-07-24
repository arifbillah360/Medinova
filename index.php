<?php get_header(); ?>
<section class="mm-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12">
				<?php
				if( have_posts() ) :
				while ( have_posts() ) :
				the_post();
				// thempleter part
				get_template_part('template-parts/content' );
				endwhile;
				else :
				?>
				<P>No post found here</P>
				<?php endif; ?>
				<?php the_posts_pagination(
					array(
						'prev_text' => 'Previous',
						'next_post' => 'Next'
					)
				);?>
			</div>
			<div class="col-md-4 col-sm-12">
				<?php dynamic_sidebar('medinova-sidebar');?>
			</div>
		</div>


	</div>
</section>

<?php get_footer(); ?>
