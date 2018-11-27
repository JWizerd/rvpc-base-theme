<?php 

    $video_cta_h        = get_field('video_cta_headline');
    $video_cta_btn_text = get_field('video_cta_button_text');
    $video_cta_btn_link = get_field('video_cta_button_link');

?>

<?php if (get_field('display_videos')): ?>

    <?php if($video_cta_h) : ?>

        <div class="consultation-banner-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 flex-center">
                        <h2><?php echo $video_cta_h ?></h2>
                        <button id="scrollTo-videos"><i class="fa fa-link" aria-hidden="true"></i> <?php echo $video_cta_btn_text ?></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="triangle"></div> -->

    <?php endif ?>
    
<?php endif ?>