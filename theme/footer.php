    </div>
  </div>
  <!-- Site footer -->
  <footer id="layout__footer" class="layout__footer">
    <div class="layout__footer-container">
      <!-- Nav -->
      <div class="layout__footer__content layout__footer__nav">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="main-menu--footer">
                <ul class="main-menu--footer-nav nav navbar-nav" id="footer-menu">
                  <li class="">
                    <a href="#">Home</a>
                  </li>
                  <li class="">
                    <a href="#">About</a>
                  </li>
                  <li class="">
                    <a href="#">Contact</a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li role="separator" class="divider"></li>
                      <li class="dropdown-header">Nav header</li>
                      <li><a href="#">Action</a></li>
                    </ul>
                  </li>
                </ul>
                <?php
                  // $nav_menu =
                  //   array(
                  //     'theme_location' => 'theme_main_nav',
                  //     'container'    => false,
                  //     'menu_id'    => 'main-menu--footer-nav',
                  //     'menu_class'   => 'main-menu--footer-nav nav navbar-nav',
                  //     'depth'      => 3,
                  //     'walker'     => new bs4navwalker()
                  //   );
                  // wp_nav_menu($nav_menu);
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Info -->
      <div class="layout__footer__content layout__footer__info">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <span>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name') ?></span>
              <a href="#top" data-scroll-ui="true" data-scroll-speed="500">Top</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
