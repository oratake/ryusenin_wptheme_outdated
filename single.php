<!-- header -->
<?php get_header(); ?>

<!-- navbar(menu) -->
<?php get_template_part('content','menu'); ?>

<main>
  <section id="blog">
    <h1 class="">お知らせ</h1>

    <?php if (have_posts()) : ?>

      <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <h3><?php the_author_nicname(); ?> <?php the_time(); ?> <?php single_cat_title('カテゴリ： '); ?></h3>
        <p>
          <?php the_content(); ?>
        </p>
      </article>

      <div class="pagenation">
        <ul>
          <li class="prev"><?php previous_posts_link('%link','前の記事'); ?></li>
          <li class="next"><?php next_posts_link('%link', '次の記事'); ?></li>
        </ul>
      </div>

        <!-- comments -->
    <?php comments_template(); ?>
    <?php else : ?>
      <h2>記事が見つかりませんでした</h2>
      <p>検索はこちらから</p>
      <?php get_search_form(); ?>
    <?php endif; ?>
    
    <!-- sidebar -->
    <?php get_sidebar(); ?>
  </section>
</main>

<!-- footer -->
<?php get_footer(); ?>