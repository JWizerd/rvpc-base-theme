<?php if (have_rows('videos')): $i = 0; ?>
      
  <div class="video-container">

    <?php while(have_rows('videos')): the_row(); $i++; ?>

      <?php $desc = get_sub_field('description'); ?>

      <div class="video" id="video-<?= $i; ?>">

        <a class="video-link" 
           data-fancybox 
           data-type="iframe" 
           data-src="https://www.youtube.com/embed/<?= get_sub_field('link'); ?>?start=6&autoplay=1&rel=0" 
           href="javascript:;">

          <img class="video-thumb" 
               src="<?= get_sub_field('thumbnail')['url']; ?>" 
               alt="<?= get_sub_field('thumbnail')['alt']; ?>">

        </a>

          <p>
            <?php if ($desc): ?>

              <small><strong>Caption:</strong> <?= $desc ?></small>
              
            <?php endif ?>
          </p>

      </div><!-- video -->
    
    <?php endwhile; ?>

  </div>

<?php else : ?>

  <h1>No videos to display at the momemt.</h1>

<?php endif; ?>