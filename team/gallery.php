<?php if (have_rows('team_gallery')) : ?> 

  <div class="container">
    <div class="row">

      <div class="team-gallery">

        <h2 class="gallery-slogan denim">
          <?= $gallery_slogan; ?>
        </h2>

        <?php while(have_rows('team_gallery')) : the_row(); ?>

          <?php $g_image = get_sub_field('image'); ?>

          <div class="item col-md-6 bottom30">

            <?php get_court_house(); ?>

            <h3 class="gallery-slogan text-center">
             <?php the_sub_field('title'); ?>
            </h3>

            <figure class="photo-figure">

              <img src="<?= $g_image['url']; ?>" 
                   alt="<?= $g_image['alt']; ?>" 
                   class="img-responsive full-width">

              <?php if (get_sub_field('description')): ?>
                <figcaption>
                  <?php the_sub_field('description'); ?>
                </figcaption>
              <?php endif ?>
            </figure>

          </div>
      
        <?php endwhile; ?> 

      </div><!-- team gallery -->

    </div><!-- row -->
  </div><!-- container -->

<?php endif; ?>
