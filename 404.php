<?php get_header(); ?>
<section class="mm-content">
	<div class="container">
		<div class="404-erorr text-center">
			<h2>PAGE NOT FOUND</h2>
			<P class="lead">Unfortunately, the page you tried to reach does not exist on this site!</P>
			<a class="btn btn-primary btn-rounded" href="/"> GO TO THE HOME PAGE </a>
		</div>
		<?php get_search_form();?>
<!-- 		<?php the_widget( 'WP_Widget_Recent_post', array( 'title' => 'Latest Posts', 'number' => 3 ) );?>
 -->	</div>
</section>

<?php get_footer(); ?>
