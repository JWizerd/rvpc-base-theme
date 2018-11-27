<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <li class="search-result">
    <p><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
  </li>

<?php endwhile; ?>
<?php else: _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
