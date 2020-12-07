<article id="post-<?php the_ID(); ?>" <?php post_class('post post--full-content'); ?>>
  <div class="post__post-title">
    <h1 class="post__post-title-text"><?php the_title(); ?></h1>
  </div>
  <div class="post__thumbnail">
    <div class="post__thumbnail__img-mask">
      <?php if (has_post_thumbnail()) : ?>
        <div style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')" class="post__thumbnail__img-img"></div>
      <?php else : ?>
        <div class="post__thumbnail__img-img"></div>
      <?php endif; ?>
    </div>
  </div>
  <div class="post__info">
    <?php if (!is_home() && !is_front_page() && !is_page()) : ?>
      <div class="post__info-item">
        <span class="post__info-item--date"><?php echo get_the_date(); ?></span>
      </div>
      <div class="post__info-item">
        <span class="post__info-item--tags"><?php the_tags(); ?></span>
      </div>
    <?php endif ?>
  </div>
  <div class="post__content"><?php the_content(); ?></div>
</article>
