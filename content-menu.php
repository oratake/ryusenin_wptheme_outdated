<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-bg" id="navbar" role="navigation">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
      <img src="<?php header_image(); ?>" height="70px" alt="<?php bloginfo('name'); ?>">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php wp_nav_menu( array(
        'theme_location'=>'mainmenu', 
        'container'     =>'', 
        'menu_class'    =>'navbar-nav ml-auto', 
        'items_warp'    =>'<ul>%3$s</ul>'));
      ?>
    </div>
  </nav>
</header>