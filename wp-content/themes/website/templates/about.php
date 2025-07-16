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
      <?php get_template_part('template-parts/post-full') ?>
    </div>
  </div>
</div>
<?php endif ?>
<?php get_footer(); ?>
