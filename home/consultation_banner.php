<?php 

	$consultation_banner_text = 									get_field('consultation_banner_text');
	$consultation_banner_button_text = 						get_field('consultation_banner_button_text');
	$consultation_banner_button_link = 						get_field('consultation_banner_button_link');

?>

<div class="consultation-banner-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 flex-center">
				<h2><?php echo $consultation_banner_text; ?></h2>
				<a href="<?php echo $consultation_banner_button_link ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php echo $consultation_banner_button_text; ?></a>
			</div>
		</div>
	</div>
</div>
<div class="triangle"></div>