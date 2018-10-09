<!-- header -->
<?php get_header(); ?>
<!-- navbar(menu) -->
<?php get_template_part('content','menu'); ?>

<section class="navbar-margin">
  <div class="row">
  </div>
</section>
<section class="row">
  <h1 class="text-center p-3">当院からのお知らせ</h1>
  <div class="col-md-9 p-3">
    <!-- template loop -->
    <?php get_template_part('loop'); ?>
    <!-- pagenation -->
    <?php if (function_exists("pagination")) pagination($wp_query->max_num_pages); ?>
  </div>

  <!-- sidebar -->
  <div class="col-md-3 p-3">
    <?php get_sidebar(); ?>
  </div>
</section>

<!-- footer -->
<?php get_footer(); ?>