<?php
/**
 * Template Name: Contact
 * Description: The ways potential customers can get in touch with you
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : the_post() ?>
<!-- Contact -->
<div class="content-page content-page--single content-page--contact">
  <div class="section">
    <div class="container">
      <?php get_template_part('template-parts/post-full') ?>
    </div>
  </div>
</div>
<?php endif ?>
<?php get_footer(); ?>
