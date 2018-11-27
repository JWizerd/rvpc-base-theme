<aside class="col-sm-4 sidebar">
  <!-- The Loop -->
  <?php get_template_part( 'sidebar_widgets' ); ?>

  <div class="widget">
    <h4 class="sidebar-headline">Our Attorneys</h4>
    <?php get_template_part('sidebar/lawyers'); ?>
  </div>

  <?php if (!is_page(997)) : ?>
    <div class="widget">
      <h4 class="sidebar-headline">Contact Us</h4>
      <?php get_template_part('sidebar/form'); ?>
    </div>
  <?php endif; ?>
</aside>
