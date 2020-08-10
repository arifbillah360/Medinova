	<article<?php post_class( array( 'class' => 'secondary' ) ); ?>>
		<h4><a class="mm-the-title" href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
		<div>
		<?php the_post_thumbnail('large', array( 'class' => 'img-fluid' ) ); ?>
		</div>

		<div class="meta-info">
		<p class="text-medinova">Post in <?php echo get_the_date(); ?></p>
		<p><?php the_excerpt(); ?> <span><a class="read-more" href="<?php the_permalink(); ?>">Read More</a></span></p>			
		</div>
	</article>