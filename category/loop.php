<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" class="col-sm-6 <?php post_class( 'post' ); ?>">
        <?php
          if ( has_post_thumbnail() ) { ?>
            <div class="post-image post-image-sm">
              <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
            </div><!--/.post-image-->
          <?php } else { ?>
            <div class="post-image post-image-sm">
              <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img_featured.jpg" />
            </div><!--/.post-image-->
          <?php } ?>
        <div class="post-details">
          <h3 class="post-details-headline">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a><!--/a-->
          </h3><!--/h3-->
          <div class="post-meta">
            <span>
              <i class="fa fa-user" aria-hidden="true"></i> <?php the_author_posts_link(); ?>
              <i class="fa fa-pencil" aria-hidden="true"></i><?php echo get_the_date(); ?>
            </span><!--/span-->
            <span class="post-categories-stuff">
              <hr class="post-category-seperator">
              <span class="tag"><i class="fa fa-tag" aria-hidden="true"></i> <?php the_category(' <i class="fa fa-tag" aria-hidden="true"></i> '); ?></span>
            </span>
          </div><!--/div .post-meta-->
        </div>
      </div><!--/div .post-->

<?php endwhile; ?>
<?php else: _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
