<aside class="col-sm-4 sidebar">
  <img
    class="img-responsive img-featured"
    src="<?php the_post_thumbnail_url(); ?>"
    alt="<?php the_title(); ?>">

  <h1 class="sidebar-headline lawyer-name"><?php the_title(); ?></h1>

  <?php if(have_rows('social_links')) : ?>

    <ul class="social-icons">

    <?php while(have_rows('social_links')) : the_row(); ?>

      <?php
        $social_icon      =  get_sub_field('social_icon');
        $social_link_text =  get_sub_field('social_link_text');
        $social_link      =  get_sub_field('social_link');
      ?>

      <li>
        <span class="social-link">
          <a target="_blank" class="social-url" href="<?php echo $social_link; ?>">
            <img
              class="social-icon inline-block"
              src="<?php echo $social_icon['url']; ?>"
              alt="<?php echo $social_link_text; ?>">

            <span class="inline-block"><?php echo $social_link_text; ?><span>
          </a>
        </span>
      </li>

    <?php endwhile; ?>

    </ul>

  <?php endif; ?>

  <h4 class="sidebar-headline">Get in Touch</h4>
  <?php get_template_part('sidebar/form'); ?>

  <?php if(have_rows('awards')) : ?>

    <h4 class="sidebar-headline">Awards and Accolades</h4>

    <?php while( have_rows('awards') ): the_row();  ?>

      <?php
        $award_image  =  get_sub_field('award_image');
        $award_title  =  get_sub_field('award_title');
        $award_link  =  get_sub_field('award_link');
      ?>

      <a target="_blank" class="col-xs-6" href="<?php echo $award_link; ?>">
        <img
          class="award"
          src="<?php echo $award_image['url']; ?>"
          alt="<?php echo $award_text; ?>">
      </a>

    <?php endwhile; ?>

  <?php endif; ?>
</aside>
