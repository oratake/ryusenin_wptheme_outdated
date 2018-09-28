<?php if(have_posts()): ?>
  <?php while(have_posts()):the_post(); ?>
    <article>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h3>
        <?php the_author_nickname(); ?> <?php the_time($d); ?> <?php single_cat_title('カテゴリ： '); ?>
      </h3>
      <p>
        <?php the_content(); ?>
      </p>
    </article>
  <?php endwhile; ?>
<?php endif; ?>