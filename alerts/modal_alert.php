<?php

$malert_h           = get_field('malert_h', 'option');
$malert_sh          = get_field('m_alert_subheadline', 'option');
$mbtn_text          = get_field('m_alert_button_text', 'option');
$mbtn_url           = get_field('m_alert_button_url', 'option');
$mshow_header_alert = get_field('show_header_alert', 'option');
$show_modal_alert   = get_field('show_modal_alert', 'option');
$phone              = get_field('main_phone', 'options');

?>

<?php if ($show_modal_alert && is_front_page()): ?>
  <div class="modal fade" id="alertBox">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="alert-yellow">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times; Close</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <h3>
            <strong><i class="fa fa-exclamation-triangle"></i> ALERT:</strong>
            <?= $malert_h; ?>
          </h3>
          <p><?= $malert_sh; ?><p>
          <a class="btn btn-primary" href="<?= $mbtn_url ? $mbtn_url : 'tel:+1' . remove_special_chars($phone); ?>">
            <?php if ($mbtn_text): ?>
              <?= $mbtn_text; ?>
            <?php else: ?>
              <i class="fa fa-phone"></i> CALL US NOW
            <?php endif; ?>
          </a>
        </div><!-- alert yellow -->
      </div>
    </div>
  </div>

  <script type="text/javascript">
      jQuery(window).on('load',function(){
          jQuery('#alertBox').modal('show');
      });
  </script>
<?php endif ?>