<?php

  // Cases Section - Contains Repeater Field

  $content_left =    get_field('content_left');
  $content_right = get_field('content_right');
  $content_headline = get_field('long_content_headline');
  $content_subheadline = get_field('long_content_subheadline');

?>

<section class="long-content content-wrapper">
  <div class="container">
    <div class="row">
      <?php get_court_house(); ?> <!-- Remember that the court house funciton returns a col-sm-12 -->
    </div><!-- row -->
    
    <div class="row">
      <div class="col-sm-12 text-center top20 bottom20">
        <h2><?= $content_headline ?></h2>
        <h3 class="denim"><?= $content_subheadline ?></h3>
      </div>
    </div><!-- row -->

    <div class="row">
      <div class="col-md-6 long-content">
          <div class="left-content">
            <?= $content_left ?>
          </div>
      </div><!-- content left -->

      <div class="col-md-6 long-content">
          <div class="right-content">
            <?= $content_right ?>
          </div>
      </div><!-- content right -->
    </div>
  </div>
</section>
