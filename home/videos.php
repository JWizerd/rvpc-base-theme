<?php if (get_field('display_videos')): ?>

  <?php  
  $vh = get_field('video_headline');
  $vs = get_field('video_subheadline');
  $vb = get_field('videos_button');
  $vl = get_field('videos_link');
  ?>

  <section class="content-wrapper videos" id="videos">
    <div class="container">

      <div class="video-headings">
        <h2><?= $vh; ?></h2>
        <p class="divider"></p>
        <p><?= $vs; ?></p>
      </div>

      <?php get_template_part('partials/videos'); ?>

      <a href="<?= $vl ?>" 
         class="btn btn-hollow relative bottom30">
         <?= $vb ?> 
         <span class="absolute">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </span>
      </a>

    </div>

  </section>

<?php endif ?>