	<article<?php post_class( array( 'class' => 'secondary' ) ); ?>>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
		<div>
		<?php the_post_thumbnail('large', array( 'class' => 'img-fluid' ) ); ?>
		</div>

		<div class="meta-info">
			<p>By <span><?php the_author_posts_link();?></span>
		Categories:<span> <?php the_category( ' ' ); ?></span>
		<span><?php the_tags( 'tags:<span>' , '</span>' );?></span></p>
		</div>

		<p><span><?php the_content()?></span></p>
	</article>