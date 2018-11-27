<?php
  $facebook =               get_field('facebook', 'option');
  $gplus =                  get_field('google_plus', 'option');
  $linkedin =               get_field('linkedin', 'option');
?>

<div class="footer-links-wrapper">
  <div class="container">
    <div class="footer-links">
      <ul class="footer-copy">
        <li>©<?= date('Y') ?> Copyright Rossi Vucinovich PC. All Rights Reserved.</li>
        <li>
          <a href="">Privacy Policy</a>
        </li>
        <li>
          <a href="">Disclaimer</a>
        </li>
        <li>
          <a href="<?= home_url() ?>/portal">Portal</a>
        </li>
      </ul>
      <ul class="social_links">
        <li class="social_icon">
          <a href="<?php echo $facebook; ?>">
            <i class="fa fa-facebook-square"></i>
          </a>
        </li>
        <li class="social_icon">
          <a href="<?php echo $gplus; ?>">
            <i class="fa fa-google-plus-square"></i>
          </a>
        </li>
        <li class="social_icon">
          <a href="<?php echo $linkedin; ?>">
            <i class="fa fa-linkedin-square"></i>
          </a>
        </li>
      </ul>
    </div>
    </div>
</div>
