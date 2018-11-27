<?php get_header(); ?>
  <main class="subpage">
    <?php get_template_part('page/hero'); ?>
    <?php get_template_part('page/breadcrumbs'); ?>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('home/quote_section') ?>
  </main>
<?php get_footer(); ?>
