<?php get_header(); ?>
<section class="mm-content">
	<div class="container">
		<?php 
			the_archive_title( '<h2 class="archive-title">', '</h2>' );
			the_archive_description();
		?>


		<?php 
			if( have_posts() ) :
				while ( have_posts() ) : 
					the_post();
			// thempleter part
			get_template_part('template-parts/content', 'archive' );
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

<?php get_footer(); ?>
