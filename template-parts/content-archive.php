	<article<?php post_class();?>>
		<?php echo get_post_format();?>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
		<?php the_post_thumbnail(array( 300,300 ));?>

		<div class="meta-info">
		<p>Post in <?php echo get_the_date(); ?> By <?php the_author_posts_link();?></p>
		<p>Categories: <?php the_category( ' ' );?></p>
		<p><?php the_tags( 'tags:' , ',' );?></p>			
		</div>
		<p><?php the_excerpt(); ?></p>
	</article>