<header class="banner">
  <nav class="navbar navbar-default">
    <div class="container">
    <div class='row'>
      <div class='col-xs-12'>
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ldc-primary-nav" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href='<?php echo get_home_url(); ?>'>
        <span class="navbar-brand">
          <span class='ldc-header-name'>Lindsey Cameron</span>
          <span class='ldc-header-school hidden-xs'>Assistant Professor of Management</span>
        </span>
        </a>
        </div>
      </div>
      <div class='col-xs-12'>
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu( array(
            'theme_location'  => 'primary_navigation',
            'container'       => 'div',
            'depth'           => 2,
            'container_class' => 'collapse navbar-collapse pull-left',
            'menu_class'      => 'nav navbar-nav',
            'container_id'    => 'ldc-primary-nav',
            'walker'          => new wp_bootstrap_navwalker() )
          );
        endif;
        ?>
      </div>
    </div>
    </div>
  </nav>
</header>
