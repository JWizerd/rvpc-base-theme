<main class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 page-content">
        <h1>Category Results for: <span class="denim"><?php echo single_cat_title() ?></span></h1>
        <p><?php echo category_description(); ?></p>
        <ul class="search-results">
          <?php get_template_part('category/loop'); ?>
        </ul>
      </div>
        <?php get_sidebar(); ?>
    </div>
  </div>
</main>

