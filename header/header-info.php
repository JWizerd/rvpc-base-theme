<?php
  $phone =      get_field('main_phone', 'options');
  $facebook =   get_field('facebook', 'option');
  $gplus =      get_field('google_plus', 'option');
  $linkedin =   get_field('linkedin', 'option');
?>


<ul class="header-info flexbox center-children">
  <li class="fela">
    <i class="fa fa-gavel denim pull-left"></i>
    Nationally Recognized <span class="block">FELA Attorneys</span>
  </li>
  <li class="phone">
    <small class="block">IF YOU OR A LOVED ONE ARE INJURED - CALL US</small>
    <span>
      <i class="fa fa-phone denim pull-left"></i>
      <a 
        class="header-link phone-number" 
        href="tel:+1<?php echo remove_special_chars($phone); ?>"
        onClick="ga('send', 'event', 'Calls-to-Action', 'Click', 'Phone Call Click');">
        <?php echo $phone; ?>
      </a>
    </span>
  </li>
  <li class="social">
    <?php if ($facebook) : ?>
      <a target="_blank" class="header-link" href="<?php echo $facebook; ?>">
        <i class="fa fa-facebook-square header-social-icon"></i>
      </a>
    <?php endif; ?>

    <?php if ($gplus) : ?>
      <a target="_blank" class="header-link" href="<?php echo $gplus; ?>">
        <i class="fa fa-google-plus-square header-social-icon"></i>
      </a>
    <?php endif; ?>

    <?php if ($linkedin) : ?>
      <a target="_blank" class="header-link" href="<?php echo $linkedin; ?>">
        <i class="fa fa-linkedin-square header-social-icon"></i>
      </a>
    <?php endif; ?>
    <a class="search-button" href="#" data-toggle="modal" data-target="#searchBar">
      <i class="fa fa-search header-social-icon"></i>
    </a>
  </li>
</ul>
