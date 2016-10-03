<header class="banner">
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
      <span class="navbar-brand">
      <span class='ldc-header-name'>Lindsey Cameron</span><span class='ldc-header-school'>Stephen M. Ross School of Business</span>
      </span>
      </div>
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu( array(
            'theme_location'  => 'primary_navigation',
            'container'       => 'div',
            'depth'           => 2,
            'container_class' => 'collapse navbar-collapse pull-right',
            'menu_class'      => 'nav navbar-nav',
            'walker'          => new wp_bootstrap_navwalker() )
          );
        endif;
        ?>
  </div>
</nav>
</header>
