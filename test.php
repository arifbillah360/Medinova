<article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
	<header>
		<h2><?php the_title(); ?></h2>
		<div class="meta-info">
			<p>Post in <?php echo get_the_date(); ?> By <?php the_author_posts_link(); ?></p>
			<p>Categories: <?php the_category(); ?></p>
			<p><?php the_tags('Tags: ', ',');?></p>
		</div>
	</header>
	<div class="content">
		<?php the_content(); ?>
	</div>
</article>