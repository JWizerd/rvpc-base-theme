<main class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 post">

        <?php if(has_post_thumbnail()) : ?>
          
          <div class="post-thumbnail-wrap">
            <img
            class="img-responsive img-featured"
            src="<?php the_post_thumbnail_url(); ?>"
            alt="<?php the_title(); ?>">
          </div>

        <?php endif; ?>

        <div class="post-details stop">
          <div class="post-meta">
            <span>
              <i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?>
              <i class="fa fa-pencil" aria-hidden="true"></i><?php echo get_the_date(); ?>
              <p>
                <?php
                echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,googleplus,linkedin' icon_order='f,t,g,l' show_icons='1']");
                ?>
              </p>
              <p id="categories"><i class="fa fa-tag" aria-hidden="true"></i> <?php the_category(' <i class="fa fa-tag" aria-hidden="true"></i> '); ?></p>
            </span><!--/span-->
          </div>
          <hr>
        </div>
        <div class="post-content-wrapper post-excerpt">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <div class="mobile-social-sharing">
            <hr>
            <h5><strong>Like what you've read? Spread the word.<strong></h5>
            <?php
            echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,googleplus,linkedin' icon_order='f,t,g,l' show_icons='1']");
            ?>
          </div><!-- mobile social sharing -->
        </div>
        <?php comments_template(); ?>
      </div>
        <?php get_sidebar(); ?>
    </div>
  </div>
</main>