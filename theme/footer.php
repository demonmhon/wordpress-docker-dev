    </div>
  </div>
  <!-- Site footer -->
  <footer id="layout__footer" class="layout__footer">
    <div class="layout__footer-container">
      <!-- Nav -->
      <div class="layout__footer__content layout__footer__nav">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="main-menu--footer">
                <?php get_template_part('template-parts/main-menu'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Info -->
      <div class="layout__footer__content layout__footer__info">
        <div class="container">
          <div class="row">
            <div class="col">
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
