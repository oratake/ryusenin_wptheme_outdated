<?php 
/*
Template name: Home -トップページ-
*/
 ?>
<!-- header -->
<?php get_header(); ?>
<!-- navbar(menu) -->
<?php get_template_part('content','menu'); ?>

<main>
  <!-- top banner -->
  <section class="">
    <img src="<?php bloginfo('template_directory'); ?>/img/main.jpg" alt="<?php the_title(); ?>" class="banner banner-img">
  </section>
  
  <section id="news" class="bg-light p-4">
    <h1 class="text-center">お知らせ</h1>
    <?php get_template_part('content','news'); ?>
  </section>

  <section id="top-content" class="m-3 p-md-2">
    <div class="card-deck">
      <a href="<?php get_home_url('url') ?>about/" class="card">
        <h4 class="card-header text-center text-white bg-purple">当院のご案内</h4>
        <div class="card-body">
          <p class="card-text text-dark">　宮城県加美町宮崎の、<ruby>曹洞宗<rt>そうとうしゅう</rt></ruby> <ruby>巨嶽山<rt>こがくさん</rt></ruby> 龍泉院についてのご案内です。</p>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/img/alter.jpg" alt="" class="card-img-bottom">
      </a>
      <a href="<?php get_home_url('url') ?>family/" class="card">
        <h4 class="card-header text-center text-white bg-purple">お檀家様へ</h4>
        <div class="card-body">
          <p class="card-text text-dark">　お盆・お彼岸の日程や行事等のお知らせについて、メールでの配信を行っております。</p>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/img/tomb.jpg" alt="" class="card-img-bottom">
      </a>
    </div>
  </section>
  
  <?php echo get_post_meta($post->ID, 'about', true); ?>
  
  <a id="access"></a>
  <section class="bg-light p-4">
    <h1 class="text-center">アクセス</h1>
    <p class="text-center">当院へのアクセスについて</p>
    <div class="ggmap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3118.6867353784032!2d140.7836859511977!3d38.587061172681345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f896be60f0c1df5%3A0x3c8a0966a09d2971!2z6b6N5rOJ6Zmi!5e0!3m2!1sja!2sjp!4v1537479663055" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </section>
</main>

<!-- footer -->
<?php get_footer(); ?>