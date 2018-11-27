<?php  
  $banner_headline = get_field('banner_h');
  $banner_bg = get_field('banner_bg');
?>

<!-- layout: use this for properly layout in include files where necessary -->
<section class="hero banner-wrapper home-banner" style="background: url(<?= $banner_bg['url']; ?>) center top / cover no-repeat;">
  <div class="black-overlay"></div>
  <div class="container">
    <div class="row">
<!-- layout -->
      <div class="hero-content">
        <div class="col-md-8">
          <div>
            <h1 class="home-headline">
              <?= $banner_headline; ?>
            </h1>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-wrapper" id="hero-form">
          <div class="home-form-headline">
            <h3 class="text-center">Recently been injured?</h3>
            <h3 class="text-center">Tell us about your case.</h3>
            <hr>
          </div>
          <?php echo do_shortcode('[contact-form-7 id="1029" title="Hero Contact"]'); ?>
        </div>
      </div>
<!-- layout -->
    </div>
  </div>
</section>
<!-- layout -->

<?php // get_template('home/hero-mobile'); ?>
  
