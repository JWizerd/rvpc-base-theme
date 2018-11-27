<?php

/*

Template Name: Blog

*/

?>

<?php get_header(); ?>

<main class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <!-- Don't show featured post on blog post paginated pages greater than 1 -->
        <?php if(strpos($_SERVER['REQUEST_URI'], "page")  == false) : ?>

          <?php
                      $latest_args = [
                        'post_type' => 'post',
                        'ignore_sticky_posts'    => true,
                        'posts_per_page' => '1'
                      ];

                      $latest_post = new WP_Query( $latest_args );
                      if ( $latest_post->have_posts() ) : while ( $latest_post->have_posts() ) : $latest_post->the_post();

                      $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                    ?>
                  
                    <div id="post-<?php echo $post->ID; ?>" class="latest-post col-sm-12">
                        <div class="featured-tag">
                          <h4>Featured</h4>
                        </div>
                        <?php if ( $feat_image != NULL ) { ?>
                          <div class="post-image">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $feat_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                          </div><!--/.post-image-->
                          <?php } else { ?>
                            <div class="post-image">
                              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img_featured.jpg" /></a>
                            </div><!--/.post-image-->
                          <?php } ?>
                        <div class="post-details">
                          <h3>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                              <?php the_title(); ?>
                            </a><!--/a-->
                          </h3><!--/h3-->
                          <div class="post-meta">
                            <span>
                              <i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?>
                              <i class="fa fa-pencil" aria-hidden="true"></i><?php echo get_the_date(); ?>
                            </span><!--/span-->
                            <div class="post-excerpt">
                              <p><?php the_excerpt(); ?></p>
                            </div>
                            <span>
                              <hr class="post-category-seperator">
                              <span class="tag"><i class="fa fa-tag" aria-hidden="true"></i> <?php the_category(' <i class="fa fa-tag" aria-hidden="true"></i> '); ?></span>
                            </span>
                          </div><!--/div .post-meta-->
                        </div>
                    </div>

                    <?php endwhile; endif; wp_reset_postdata(); ?>

        <?php endif; ?>


                    <?php
                      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                      $sm_posts = [
                        'posts_per_page' => 10,
                        'paged' => $paged
                      ];

                      // The Query
                      $other_posts = new WP_Query( $sm_posts );
                    ?>

                      <?php if ( $other_posts->have_posts() ) : $i = 0; ?>
                        <?php while ( $other_posts->have_posts() ) : $other_posts->the_post();
                          $i++;
                          $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $other_posts->ID ), 'single-post-thumbnail' ); ?>
                          <div id="post-<?php the_ID(); ?>" class="col-sm-6 <?= (($i == 1) && (strpos($_SERVER['REQUEST_URI'], "page")  == false)) ? 'first-post-snippet ' : ''; ?>">
                            <?php
                              if ( $feat_image != NULL ) { ?>

                                <div class="post-image post-image-sm">

                                  <a href="<?php the_permalink(); ?>">
                                    <img 
                                      class="img-responsive" 
                                      src="<?php echo $feat_image[0]; ?>" 
                                      alt="<?php the_title(); ?>" 
                                      title="<?php the_title(); ?>" />
                                  </a>

                                </div><!--/.post-image-->

                              <?php } else { ?>

                                <div class="post-image post-image-sm">

                                  <a href="<?php the_permalink(); ?>">
                                    <img class="img-responsive" 
                                         src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img_featured.jpg" />
                                  </a>
                                  
                                </div><!--/.post-image-->

                              <?php } ?>
                            <div class="post-details">

                              <h3 class="post-details-headline">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                  <?php the_title(); ?>
                                </a><!--/a-->
                              </h3><!--/h3-->

                              <div class="post-meta">
                                <span class="post-detail">
                                  <i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?>
                                </span><!--/span-->
                                <span class="post-detail">
                                  <i class="fa fa-pencil" aria-hidden="true"></i><?php echo get_the_date(); ?>
                                </span>
                                <span class="post-categories-stuff">
                                  <hr class="post-category-seperator">
                                  <span class="tag"><i class="fa fa-tag" aria-hidden="true"></i> <?php the_category(' <i class="fa fa-tag" aria-hidden="true"></i> '); ?></span>
                                </span>
                              </div><!--/div .post-meta-->
                            </div>

                          </div><!--/div .post-->

                        <?php endwhile; ?>

                        <div class="col-sm-12">
                          <?php if (function_exists("pagination")) { pagination($other_posts->max_num_pages); } ?>  
                        </div>

                      <?php else: ?>

                        <h1>No Posts Found</h1>

                      <?php endif; ?>
                  
                </div>
        <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>