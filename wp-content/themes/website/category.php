<?php get_header(); ?>
<div class="content-page content-page--category">
  <div class="section section--post-list">
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="layout__content__col layout__content__col--primary">
              <div class="content-page__page-title category__title">
                <h1 class="content-page__page-title-text category__title-text"><?php single_cat_title(); ?></h1>
              </div>
              <?php if (have_posts()) : ?>
              <div class="category__post-list">
                <?php while (have_posts()) : the_post(); ?>
                  <?php get_template_part('template-parts/category', 'post-item') ?>
                <?php endwhile; ?>
              </div>
              <?php endif ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/category', 'post-pagination') ?>
  </div>
</div>
<?php get_footer(); ?>
