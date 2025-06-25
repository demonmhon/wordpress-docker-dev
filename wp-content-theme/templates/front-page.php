<?php
/**
 * Template Name: Front Page
 * Description: Front page
 */
?>
<?php get_header(); ?>
<div class="content-page content-page--single front-page__contents">
  <!-- Intro -->
  <div class="section section--intro front-page__content--intro">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="layout__content__col layout__content__col--primary">
            <div class="section-title">
              <h1 class="section-title-text"><?php echo get_bloginfo('name') ?></h1>
            </div>
            <div class="section-content">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main -->
  <div class="section section--main front-page__content--main">
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="layout__content__col layout__content__col--primary">
              <?php while ( have_posts() ) : the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('post-item post-item--full-content'); ?>>
                <div class="post-item__data--title">
                  <h1 class="post-item__data--title-text"><?php the_title(); ?></h1>
                </div>
                <div class="post-item__data--content"><?php the_content(); ?></div>
              </article>
              <?php endwhile ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
