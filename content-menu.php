<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="navbar" role="navigation">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
      <img src="<?php header_image(); ?>" height="70px" alt="<?php bloginfo('name'); ?>">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="./">お知らせ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">当院のご案内</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">アクセス</a>
        </li>
      </ul>
      <?php wp_nav_menu( array(
        'theme_location'=>'mainmenu', 
        'container'     =>'', 
        'menu_class'    =>'navbar-nav ml-auto', 
        'items_warp'    =>'<ul>%3$s</ul>'));
      ?>
    </div>
  </nav>
</header>