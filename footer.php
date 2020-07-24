
<div id="tfooter" class="p-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12"><?php dynamic_sidebar('footer-1'); ?>
			</div>
			<div class="col-md-4 col-sm-12"><?php dynamic_sidebar('footer-2'); ?>
			</div>
			<div class="col-md-4 col-sm-12"><?php dynamic_sidebar('footer-3'); ?>
			</div>
		</div>
	</div>
</div>
<div id="footer" class="bg-main p-3">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="copyright-text">
					<?php echo get_theme_mod( 'set_copyright' );?>
				</div>
			</div>
		</div>
	</div>
</div>



</body>
<?php wp_footer();?>
</html>