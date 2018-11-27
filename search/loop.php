<h2 class="main-headline"><span>Search Results: <?php echo get_search_query(); ?></span></h2>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <li class="search-result top30">
    <div class="search-result-excerpt">
      <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
      <hr>
      <small><?php echo wp_trim_words( get_the_content(), 50, '' ); ?><a href="<?php echo get_permalink(); ?>"> Learn More...</a></small>
    </div>
  </li>

<?php endwhile; ?>
<?php else: _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>

<div class="top60">
  <hr>
  <h4>Didn't find what you're looking for 
    <button class="btn btn-secondary" data-toggle="modal" data-target="#searchBar">
      <i class="fa fa-search"></i> Try Searching Again
    </button>
  </h4>
  <hr>
</div>
