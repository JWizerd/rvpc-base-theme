<?php

$args = [
  'post_type' => 'lawyer',
  'order' => 'ASC'
];

$lawyers = new WP_Query($args);

?>

<?php if ($lawyers->have_posts()) :  while($lawyers->have_posts()) : $lawyers->the_post(); ?>

  <?php $lawyer_role = get_field('role', get_the_id()); ?>

  <a href="<?php the_permalink(); ?>">
    <img
      class="sidebar-lawyer"
      src="<?php the_post_thumbnail_url(); ?>"
      alt="<?php the_title(); ?>">
  </a>
  <h5 class="attorney-name">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h5>
  <p class="attorney-role"><?php echo $lawyer_role; ?></p>

<?php endwhile; endif; ?>
