<?php
/**
 * Template Name: About
 * Description: Give a brief summary of who you are, your company history
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : the_post() ?>
<!-- About -->
<div class="content-page content-page--single content-page--about">
  <div class="section">
    <div class="container">
      <div class="row" >
        <div class="col">
          <div class="layout__content__col layout__content__col--primary">
            <div class="section-title">
              <h1 class="section-title-text"><?php get_the_title() ?></h1>
            </div>
            <div class="section-content">
              <?php the_content() ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif ?>
<?php get_footer(); ?>
