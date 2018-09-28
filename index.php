<?php get_header(); ?>
<?php get_template_part('content','menu'); ?>

<main id="main">
  <section class="banner">
    <div class="row">
      <div class="col-12">
        <h1 class="display-3">あ</h1>
        <p class="lead"></p>
      </div>
    </div>
  </section>

  <a id="news"></a>
  <section class="bg-light p-4">
    <h2 class="text-center">お知らせ</h2>
      <div class="col-12 m-3">
        <ul>
          <li>おしらせ</li>
          <li>し</li>
          <li>ら</li>
          <li>せ</li>
        </ul>
      </div>
  </section>
  
  <section class="m-3">
    <div class="row d-md-flex p-4">
      <div class="col-md-6">
        <div class="card text-center">
          <img src="img/alter.jpg" alt="ご案内" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title"><a href="">当院のご案内</a></h4>
            <p class="card-text">宮城県 加美町宮崎の、<ruby>曹洞宗<rt>そうとうしゅう</rt></ruby> <ruby>巨嶽山<rt>こがくさん</rt></ruby> 龍泉院についてのご案内です。</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card text-center">
          <img src="img/tomb.jpg" alt="お檀家様へ" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title"><a href="">お檀家様へ</a></h4>
            <p class="card-text">お盆・お彼岸の日程や行事等のお知らせについて、メールでの配信を行っております。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <a id="access"></a>
  <section class="p-4">
    <h1 class="text-center">アクセス</h1>
    <p>当院へのアクセスについて</p>
  </section>
</main>


<?php get_footer(); ?>