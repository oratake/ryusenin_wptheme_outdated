<?php query_posts("post_type=post&posts_per_page=5"); ?>
<?php
$cat = get_the_category();
$catname = $cat[0]->cat_name; //カテゴリ名
$catslug = $cat[0]->slug; //スラッグ名
?>
<?php if(have_posts()): ?>
<div class="col-12">
  <ul id="news" class="p-4">
<?php while(have_posts()):  the_post(); ?>
    <li><?php the_time('Y/m/d'); ?>　　 <span class="badge badge-primary <?php echo $catslug; ?>"><?php echo $catname; ?></span> 　<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
  </ul>
</div>
<?php else: ?>
<p>現在投稿記事はありません。</p>
<?php endif; ?>