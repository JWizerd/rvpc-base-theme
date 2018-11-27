<!-- layout -->
<section class="row main-navigation">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-sm-10 col-sm-offset-1">
<!-- layout -->
        <div class="primary-nav">
        <!-- <div class="blue-box"></div> -->
        <?php wp_nav_menu (
          array(
            'theme_location'  =>  'primary'
          )
        );
        ?>
      </div>
<!-- layout -->
      </div>
    </div>
  </div>
</section>
<div class="mobile-menu">
  <!-- <div class="header-search mobile-search"> -->
    <?php // get_search_form(); ?>
  <!-- </div> -->
  <button class="hamburger"></button>
  <button class="cross"></button>
</div>
<!-- layout -->
