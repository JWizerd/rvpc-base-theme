<?php  
/*
ACFs
 */

$show_posts = get_field('show_posts');
$header     = get_field('home_posts_header');
$subheader  = get_field('home_posts_subheader');
$button     = get_field('home_posts_button_text');
$link       = get_field('home_posts_button_link');

?>

<?php if ($show_posts) : ?>

    <div class="top50">
        <div class="container-fluid top30 bottom30">
            <div class="text-center">
                <h2><strong><?= $header ?></strong></h2>
                <p><?= $subheader ?></p>
                <a href="<?= $link ?>" 
                   class="btn btn-hollow relative bottom30">
                   <?= $button ?> 
                   <span class="absolute">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                   </span>
                </a>
            </div>

            <div class="owl-theme owl-carousel" id="home-posts">

                <?php  
                    $args = [
                        'posts_per_page' => 15,
                        'orderby' => 'date'
                    ];
                    $posts = new WP_Query($args);
                ?>

                <?php if ( $posts->have_posts() ) : 
                    while ( $posts->have_posts() ) : 
                        $posts->the_post(); ?>

                        <div class="item">
                            <p class="text-center hm-post-wrapper post-image-sm bottom0">
                                <a href="<?php the_permalink(); ?>">
                                    <span class="post-image-frame">
                                        <img 
                                            src="<?= the_post_thumbnail_url('medium_large'); ?>" 
                                            class="img-responsive">
                                    </span>
                                </a>
                            </p>
                            <div class="post-details">
                                <h3 class="hm-post-headline">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="post-meta">
                                    <span>
                                      <i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?>
                                      <i class="fa fa-pencil" aria-hidden="true"></i><?php echo get_the_date(); ?>
                                    </span><!--/span-->
                                </div>
                                <p>
                                    <small><?php the_excerpt(); ?></small>
                                </p>
                            </div>
                        </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>

            </div><!-- #home-posts owl-carousel -->

        </div><!-- container -->
    </div><!-- wrapper -->

<?php endif; ?>