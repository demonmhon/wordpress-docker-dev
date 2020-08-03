<?php get_header(); ?>
<?php if (have_posts()) : the_post() ?>
<div class="content-page content-page--single">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="layout__content__col layout__content__col--primary">
            <?php get_template_part('template-parts/post', 'item') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php else : ?>
<?php endif; ?>
<?php get_footer(); ?>
