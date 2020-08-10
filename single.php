<?php get_header(); ?>

<div id="primary">
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-12">
								<?php
				while( have_posts() ) : 
					the_post();
					get_template_part('template-parts/content', 'single');
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
				endwhile;
			?>
				</div> <!--col-md-9 -->
				 <div class="col-md-3 col-sm-12">
				<?php dynamic_sidebar('medinova-sidebar');?>
			</div>
			</div> <!--row -->
		</div> <!--container -->
	</div>
</div>




<?php get_footer(); ?>