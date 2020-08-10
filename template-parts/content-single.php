<article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
	<header>
		<?php the_post_thumbnail( 'full', array('class' => 'post-img-responsive'));?>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
		<div class="meta-info">
			<p>Post in <?php echo get_the_date(); ?> By <?php the_author_posts_link(); ?></p>
		</div>
	</header>
	<div class="content">
		<?php 
		the_content();
		wp_link_pages();
		 ?>
		 <div class="meta-info">
		 	<p>Categories: <?php the_category(' '); ?></p>
			<p><?php the_tags('Tags: ', ',');?></p>
		 </div>
	</div>
	<hr>
</article>