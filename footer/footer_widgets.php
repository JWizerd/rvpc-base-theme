<?php
  $phone =                  get_field('main_phone', 'options');
  $toll_free =              get_field('toll_free', 'option');
  $toll_free_colorado =     get_field('toll_free_colorado', 'option');
  $email =                  get_field('email_address', 'option');
  $business_address =       get_field('business_address', 'option');
  $gmaps =                  get_field('google_maps_link', 'option');
?>

<!-- footer widget area 1 -->
<div class="col-md-3 col-sm-6 col-xs-6 footer-widget">

  <?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>

  <img class="footer-logo" src="<?php echo $logo[0]; ?>" alt="<?php echo get_option('companyname'); ?> logo">

  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-1')) : else : ?>

  <div class="pre-widget">
    <p><strong>Widgetized Area</strong></p>
    <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
  </div>

  <?php endif; ?>

</div>

<!-- footer widget area 2 -->
<div class="col-md-3 col-sm-6 col-xs-6 footer-widget">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-2')) : else : ?>

    <div class="pre-widget">
      <p><strong>Widgetized Area</strong></p>
      <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
    </div>

    <?php endif; ?>

</div>

<!-- footer widget area 3 -->
<div class="col-md-3 col-sm-6 col-xs-6 footer-widget">

  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-3')) : else : ?>

  <div class="pre-widget">
    <p><strong>Widgetized Area</strong></p>
    <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
  </div>

  <?php endif; ?>

</div>

<!-- footer widget area 4 -->
<div class="col-md-3 col-sm-6 col-xs-6 footer-widget widget">

  <h4>Company Information</h4>

  <ul class="footer-external-links footer-company-info">
    <li>
      <a href="<?php echo $gmaps; ?>" target="_blank"><i class="fa fa-university footer-icon denim"></i>
        <?php echo $business_address; ?>
      </a>
    </li>
    <li>
      <a href="tel:+1<?php echo remove_special_chars($phone); ?>">
        <i class="fa fa-phone denim" aria-hidden="true"></i> <?php echo $phone; ?>
      </a>
    </li>
    <li>
      <a href="tel:+1<?php echo remove_special_chars($toll_free); ?>">
        <i class="fa fa-phone-square denim" aria-hidden="true"></i> <?php echo $toll_free; ?>
      </a>
    </li>
    <li>
      <a href="tel:+1<?php echo remove_special_chars($toll_free_colorado); ?>">
        <i class="fa fa-phone-square denim" aria-hidden="true"></i> <?php echo $toll_free_colorado; ?>
      </a>
    </li>
    <li>
      <a href="mailto:<?php echo $email; ?>">
        <i class="fa fa-envelope denim" aria-hidden="true"></i> <?php echo $email; ?>
      </a>
    </li>
  </ul>

</div>
