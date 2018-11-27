<?php 
/*
Template Name: Verdicts
 */
 ?>

 <?php get_header(); ?>
   <main class="subpage">
     <?php get_template_part('page/hero'); ?>
     <?php get_template_part('page/breadcrumbs'); ?>

       <div class="container content-wrapper">
         <div class="row">
           <div class="col-sm-8 page-content">
             <?php if (has_post_thumbnail()): ?>
               <img
                 class="img-responsive img-featured"
                 src="<?php the_post_thumbnail_url(); ?>"
                 alt="<?php the_title(); ?>">
             <?php endif; ?>

            <?php if (have_rows('verdicts', 'option')): ?>
              <div class="verdicts">
                <ul>
                  <?php while (have_rows('verdicts', 'option')) : the_row(); ?>

                    <li class="verdict">

                      <h3 class="bottom">
                        <span>$<?= get_sub_field('amount'); ?></span>
                        <span>
                          <?php if(get_sub_field('link')) : ?>
                            <a href="<?= get_sub_field('link'); ?>"><?= get_sub_field('title'); ?></a>
                          <?php else: ?>
                            <?= get_sub_field('title'); ?>
                          <?php endif; ?>
                        </span>
                      </h3>
                      <p><?= get_sub_field('description'); ?></p>
                      
                    </li>

                  <?php endwhile; ?>
                </ul>
              </div><!-- verdicts -->
            <?php endif ?>

           </div>
             <?php get_sidebar(); ?>
         </div>
       </div>

   </main>
 <?php get_footer(); ?>
