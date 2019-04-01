<?php
  $reason_enabled = get_field('reason_banner_enabled');
  $reason_banner_headline = get_field('reason_banner_headline');
  $reason_banner_bg = get_field('reason_banner_bg');
?>

<?php if ($reason_enabled) : ?>
    <section
    class="hero-reason-banner banner-wrapper lazy-bg"
    style="
        background-image: url(<?= placeholder_bg() ?>);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: bottom;
    "
    data-src="<?= $reason_banner_bg ?>">
    <div class="container">
        <div class="row">
            <div class="black-overlay"></div>

            <div class="col-md-6 col-sm-4">
                <h1>
                <?= $reason_banner_headline; ?>
                </h1>
            </div><!-- col md 6 -->

            <div class="col-md-5 col-sm-8">
                <div class="reason-buttons-wrapper">
                    <?php while(have_rows('reason_banner_buttons')): the_row(); ?>
                        <a href="<?= get_sub_field('link') ?>" class="btn btn-primary">
                            <?= get_sub_field('text') ?>
                        </a>
                    <?php endwhile ?>
                </div>
            </div><!-- col md 6 -->

        </div><!-- row -->
    </div>
    </section>
    <!-- layout -->
<?php endif ?>


