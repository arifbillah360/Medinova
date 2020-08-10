<?php get_header(); ?>

<section class="doctors text-center">
	<div class="container">
		<div class="row">
			<?php 
					$attachments = new attachments('team');
					if( $attachments->exist() ) :
						 while( $attachment = $attachments->get() ) : ?>
			<div class="col-md-3 col-sm-6">
						<div class="card">
					<div class="card-header">
						<div class="doctor-img">
							<?php echo $attachments->image( 'thumbnail' )?>
						</div>
						<div class="doctor-title">
						 	<?php echo $attachments->field( 'title' )?>
						 	<div class="text-muted"><?php echo $attachments->field( 'subtitle' )?></div>
						</div>
					</div>
					<div class="card-body">
						<div class="doctor-about">
							<?php echo $attachments->field( 'about' )?>
						</div>
					</div>
				</div>
			</div>
	

				<?php 
			endwhile;
			endif;
			?>


		</div>
	</div>
</section>
<?php get_footer(); ?>