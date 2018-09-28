<!-- header -->
<?php get_header(); ?>
<!-- navbar(menu) -->
<?php get_template_part('content','menu'); ?>

<div class="row">

  <div class="col-md-9">
    <!-- template loop -->
    <?php get_template_part('loop'); ?>
    <!-- pagenation -->
    <?php if (function_exists("pagenation")) pagenation($wp_query->max_num_pages); ?>
  </div>

  <!-- sidebar -->
  <?php get_sidebar(); ?>

</div>

<!-- footer -->
<?php get_footer(); ?>