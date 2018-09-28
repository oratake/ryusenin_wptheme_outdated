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
  <section class="banner">
    <div class="row">
    </div>
  </section>

  <section class="bg-light p-4">
    <h1 class="text-center">お知らせ</h1>
      <div class="col-12">
        <ul id="news" class="p-4">
          <li class="p-2">2018/07/20　　 <span class="badge badge-primary badge-purple">檀家さま</span> 　<span>お盆期間の予定について</span></li>
          <li class="p-2">2018/07/14　　 <span class="badge badge-success badge-green">お知らせ</span> 　<span>ホームページの運用を開始致しました。</span></li>
        </ul>
        <p class="text-right">お知らせの一覧はこちら</p>
      </div>
  </section>
  
  <section class="m-3">
    <div class="row d-md-flex p-4">
      <div class="col-md-6">
        <div class="card text-center">
          <img src="<?php bloginfo('template_directory'); ?>/img/alter.jpg" alt="ご案内" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title"><a href="">当院のご案内</a></h4>
            <p class="card-text">宮城県 加美町宮崎の、<ruby>曹洞宗<rt>そうとうしゅう</rt></ruby> <ruby>巨嶽山<rt>こがくさん</rt></ruby> 龍泉院についてのご案内です。</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card text-center">
          <img src="<?php bloginfo('template_directory'); ?>/img/tomb.jpg" alt="お檀家様へ" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title"><a href="">お檀家様へ</a></h4>
            <p class="card-text">お盆・お彼岸の日程や行事等のお知らせについて、メールでの配信を行っております。</p>
          </div>
        </div>
      </div>
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