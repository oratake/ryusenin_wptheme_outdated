<!-- header -->
<?php get_header(); ?>

<!-- navbar(menu) -->
<?php get_template_part('content','menu'); ?>

<main>
  <section id="blog" class="row">
    <div class="col-md-9 p-3">
      <h1 class="text-center">当院からのお知らせ</h1>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="article-page">
          <div class="card p-3 m-4">
            <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <h5 class="card-subtitle mb-2 text-muted">投稿者：<?php the_author_nickname(); ?>　投稿日時：<?php the_time('y/m/d H:i'); ?> <?php single_cat_title('カテゴリ： '); ?></h5>
            <hr>
            <p>
              <?php the_content(); ?>
            </p>
            <?php endwhile; ?>
            <?php else : ?>
              <h2>記事が見つかりませんでした</h2>
              <p>検索はこちらから</p>
            <?php get_search_form(); ?>
          <?php endif; ?>
          </div>
        </article>
        <!-- ページネーション あとで実装
        <div class="pagenation">
          <ul>
            <li class="prev"><?php previous_posts_link('%link','前の記事'); ?></li>
            <li class="next"><?php next_posts_link('%link', '次の記事'); ?></li>
          </ul>
        </div>
        -->
          <!-- comments -->
        

    </div>
      <!-- sidebar -->
      <div class="col-md-3">
        <?php get_sidebar(); ?>
      </div>
  </section>
</main>

<!-- footer -->
<?php get_footer(); ?>