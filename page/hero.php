<?php

  $hero_background = get_field("hero_background");
  $hero_description = get_field('hero_description');

?>

<div class="subpage-hero z-0">
  <img
    src="<?= !empty($hero_background['url']) ? 
                    $hero_background['url'] : 
                    get_stylesheet_directory_uri() . '/assets/img/bg_railroad-injuries.png'; ?>"
    alt="<?php echo $hero_background['alt'] ?>"
    class="hero-image">
  <div class="black-overlay z-1"></div>
  <div class="container">
      <div class="subpage-hero-content z-2">
        <h1><?php the_title(); ?></h1>
        <p class="lead"><?php echo $hero_description; ?></p>
      </div>
  </div>
</div>
