<?php 

$alert_h  = get_field('h_alert_headline', 'option');
$alert_sh = get_field('h_alert_subheadline', 'option');
$btn_text = get_field('h_alert_button_text', 'option');
$btn_url  = get_field('h_alert_button_url', 'option');
$show_header_alert = get_field('show_header_alert', 'option');
$phone  = get_field('main_phone', 'option');

?>

<?php if ($show_header_alert ): ?>
  <div id="alert-yellow">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h3>
            <strong><i class="fa fa-exclamation-triangle"></i> ALERT:</strong> 
            <?= $alert_h; ?> 
          </h3>
          <p><?= $alert_sh; ?><p>
          <a class="btn btn-primary" href="<?= $btn_url ? $btn_url : 'tel:+1' . remove_special_chars($phone); ?>">
            <?php if ($btn_text): ?>
              <?= $btn_text; ?>
            <?php else: ?>
              <i class="fa fa-phone"></i> CALL US NOW
            <?php endif; ?>
          </a>
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- alert -->  
<?php endif ?>