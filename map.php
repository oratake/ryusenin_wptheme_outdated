<?php 
/*
Template Name: 固定ページ
*/
 ?>

<!-- header -->
<?php get_header(); ?>

<!-- navbar(menu) -->
<?php get_template_part('content','menu'); ?>

<main>
  <!-- top banner -->
    <?php $ctm_img = get_post_meta($post->ID,'imagebanner',true); ?>
      <?php if($ctm_img): ?>
        <section class="banner">
          <img src="<?php $ctm_img; ?>" alt="<?php the_title(); ?>">
        </section>
      <?php endif; ?>
  <section id="map" class="m-3 p-4">
    <h2 class="text-center"><?php the_title(); ?></h2>
    <hr>
    <div class="row">
      <?php get_post_meta($post->ID, 'map', true); ?>
    </div>
  </section>
  <section id="temple_info" class="m-3 p-4">
    <?php if(have_posts()) : 
      while (have_posts()) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_content(); ?>
      </div>
      <?php endwhile;
      else : ?>
      <div class="post">
        <h2>記事が見つかりませんでした。</h2>
        <p>お探しの記事が見つかりませんでした。</p>
      </div>
    <?php endif; ?>
  </section>
</main>


<?php get_footer(); ?>