	 <article<?php post_class();?>>
		<?php echo get_post_format();?>
		<h4><a class="mm-the-title" href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
		<?php the_post_thumbnail('full', array('class' => ' post-img-responsive'));?>

		<div class="meta-info">
		<p><span>Post in</span> <?php echo get_the_date(); ?><span> Categories:</span> <?php the_category( ' ' );?> </p>
		</div>
		<p><?php the_excerpt(); ?> <span><a class="read-more" href="<?php the_permalink(); ?>">Read More</a></span></p>
		<hr>
	</article>



<!-- 

	 <article<?php post_class();?>>
		<?php echo get_post_format();?>
		<h4><a class="mm-the-title" href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
		<?php the_post_thumbnail( array( 450, 450) );?>

		<div class="meta-info">
		<p>Post in <?php echo get_the_date(); ?> By <?php the_author_posts_link();?></p>
		<p>Categories: <?php the_category( ' ' );?></p>
		<p><?php the_tags( 'Tags:' , ',' );?></p>			
		</div>
		<p><?php the_excerpt(); ?> <span><a class="read-more" href="<?php the_permalink(); ?>">Read More</a></span></p>
	</article> -->