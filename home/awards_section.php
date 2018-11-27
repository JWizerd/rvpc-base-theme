<div class="awards-section-wrap content-wrapper-small">
	<div class="container">
		<div class="row">

			<div class="col-sm-12 awards-wrapper">
				<?php if(have_rows('awards')) : ?>
					<?php while(have_rows('awards')) : the_row(); ?>

							<img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">

					<?php endwhile; ?>
				<?php endif; ?>
			</div>

		</div>
	</div>
</div>