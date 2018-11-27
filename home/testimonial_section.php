<?php 

	$testimonial_header = get_field('testimonial_header', 'option');
	$testimonials_bg    = get_field('testimonials_bg', 'option');

?>

<div class="testimonial-section-wrap content-wrapper" style="background:url(<?= $testimonials_bg['url']; ?>) center center / cover no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2 class="top30"><?php echo $testimonial_header; ?></h2>
			</div>
			
			<div class="col-sm-12 text-center">
				<div class="owl-carousel owl-theme" id="testimonials">
					<?php if(have_rows('testimonials', 'option')) : ?>
						<?php while(have_rows('testimonials', 'option')) : the_row();
							$testimonial  = 		get_sub_field('testimonial');
							$client_name  = 		get_sub_field('client_name');
							$client_title = 	get_sub_field('client_title');
						?>

							<div class="item">
								<p><?php echo $testimonial; ?></p>
								<img class="stars" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/stars.png" alt="">
								<p class="client-name">-<?php echo $client_name; ?>
									<?php if($client_title) : ?>
										<em><?php echo ' (' . $client_title . ')'; ?></em>
									<?php endif; ?>
								</p>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>