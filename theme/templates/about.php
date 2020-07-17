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
</div>
<?php endif ?>
<?php get_footer(); ?>
