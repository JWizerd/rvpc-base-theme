<div id="sidebar-nav">

  <!-- first widget area -->
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-widget-1')) : ?>

	<?php endif; ?>
  
    <!-- second widget area / latest post quick fix for blog page -->
  <?php if(!is_page('blog')) : ?>

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-widget-2')) : ?>

	  <?php endif; ?>

  <?php endif; ?>

  <!-- third widget area -->
  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-widget-3')) : ?>

	<?php endif; ?>

</div>
