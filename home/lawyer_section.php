<?php 

	$lawyer_header_black = 	get_field('lawyer_header_black');
	$lawyer_header_blue  = 	get_field('lawyer_header_blue');
	$lawyer_subheader    = 	get_field('lawyer_subheader');
	$lawyer_subheader    = 	get_field('lawyer_subheader');
	$lawyer_bg           = 	get_field('lawyers_bg');

?>

<div class="lawyer-section-wrap content-wrapper" style="background: url(<?= $lawyer_bg['url']; ?>) top center / cover no-repeat;">
	<div class="container">
		<div class="row">

			<?php get_court_house(); ?>

			<div class="col-sm-8 col-sm-offset-2 text-center top30 bottom30">
				<h2><?php echo $lawyer_header_black; ?> <span><?php echo $lawyer_header_blue ?></span></h2>
				<p><?php echo $lawyer_subheader; ?></p>
			</div>

		</div><!-- row -->
		<div class="row flex-center flex-row-to-col">
			<?php if(have_rows('lawyers')) : ?>
				<?php while(have_rows('lawyers')) : the_row(); 
					$lawyer = get_sub_field('lawyer');
				?>

					<?php if($lawyer) : 
						$post = $lawyer;
						setup_postdata($post);
					?>
						
						<div class="col-sm-3 text-center lawyer-cta">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo the_post_thumbnail_url(); ?>" class="bottom10 img-circle" alt="">
								<h4 class="bottom"><?php the_title(); ?></h4>
								<p class="bottom"><small><?php echo get_field('role'); ?></small></p>
							</a>
						</div>

						<?php wp_reset_postdata(); ?>

					<?php endif; ?>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>