<main class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 page-content">
        <?php if (has_post_thumbnail()): ?>
          <img
            class="img-responsive img-featured"
            src="<?php the_post_thumbnail_url(); ?>"
            alt="<?php the_title(); ?>">
        <?php endif; ?>
        
        <?php the_content(); ?>

        <?php get_template_part('partials/videos'); ?>
      </div>
    </div>
  </div>
</main>