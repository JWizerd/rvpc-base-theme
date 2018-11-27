<?php

  // Cases Section - Contains Repeater Field

  $cases_header =    get_field('cases_header');
  $cases_subheader = get_field('cases_subheader');

?>

<section class="cases content-wrapper" style="">
  <div class="container">
    <div class="row">

      <?php get_court_house(); ?> <!-- Remember that the court house funciton returns a col-sm-12 -->

      <div class="col-sm-12 text-center">
        <h2><?php echo $cases_header; ?></h2>
        <p><?php echo $cases_subheader; ?></p>
      </div>

        <?php if(have_rows('cases')) : ?>
					<?php $i = 0; ?>
          <?php while(have_rows('cases')) : the_row(); $i++ ?>
            <div class="col-md-3 col-sm-6 case-cta <?= ($i === 1) ? 'col-md-offset-3 ' : '' ?>">
              <a href="<?php echo get_sub_field('url'); ?>">
                <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
                <div class="cta-banner-wrapper text-center">
                  <h3><?php echo get_sub_field('banner_text'); ?></h3>
                </div>
              </a>
            </div>

          <?php endwhile; ?>

        <?php endif; ?>

      <?php // hollow_btn("View All Cases", "#"); ?>

    </div>
  </div>
</section>
