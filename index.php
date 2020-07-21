<?php get_header(); ?>
<section class="mm-content">
	<div class="container">
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
</section>

<div class="container text-center">
	<a class="btn btn-lg btn-danger" href="http://localhost/medinova/hometemplate">Got to The Index Page</a>
</div>

<?php get_footer(); ?>
