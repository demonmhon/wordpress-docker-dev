<?php
/*
Template Name: Search Page
*/

global $wp_query;
$total_results = $wp_query->found_posts;

?>
<?php get_header(); ?>
<?php if (have_posts()) : the_post() ?>
<div class="content-page content-page--search">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="layout__content__col layout__content__col--primary">
            <div class="content-page--search__header">
              <div>
                <?php get_template_part('template-parts/search-form'); ?>
              </div>
              <div>
                <span class="content-page--search__total">Total <span><?php echo $total_results ?><span></span>
              </div>
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
</div>
<?php else : ?>
<?php endif; ?>
<?php get_footer(); ?>
