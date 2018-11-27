<?php 

	$settlements_header = 			get_field('settlements_header');
	$settlements_amount = 			get_field('settlements_amount');
	$settlements_button_text = 	get_field('settlements_button_text');
	$settlements_button_link = 	get_field('settlements_button_link');
	$settlements_button_link = 	get_field('settlements_button_link');
	$settlements_background  = 	get_field('settlements_bg');

?>

<section class="settlements content-wrapper" style="background: url(<?= $settlements_background['url']; ?>) top center / cover no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3 class="settlements-header"><?php echo $settlements_header; ?></h3>
				<!-- <h2 class="counter" data-count="<?php // echo $settlements_amount; ?>">$0</h2> -->
				<h2 class="counter">$<?php echo number_format((int)$settlements_amount); ?></h2>
			</div>
			<?php hollow_btn($settlements_button_text, $settlements_button_link); ?>
		</div>
	</div>
</section>