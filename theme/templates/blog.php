<?php
/**
 * Template Name: Blog
 * Description: Articles you want to share
 */
?>
<?php get_header(); ?>
<!-- Blog -->
<div class="content-page content-page--single content-page--blog">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="layout__content__col layout__content__col--primary">
            <div class="section-title">
              <h1 class="section-title-text"><?php get_the_title() ?></h1>
            </div>
            <div class="section-content">
              <div class="category__post-list">
              <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part('template-parts/category', 'post-item') ?>
              <?php endwhile ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/category', 'post-pagination') ?>
  </div>
</div>
<?php get_footer(); ?>
