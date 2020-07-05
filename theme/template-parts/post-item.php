<article id="post-<?php the_ID(); ?>" <?php post_class('post-item post-item--full-content'); ?>>
  <div class="content-page__page-title post-item__data--title">
    <?php if (is_single() || is_page()) : ?>
      <h1 class="content-page__page-title-text post-item__data--title-text"><?php the_title(); ?></h1>
    <?php else: ?>
      <h2 class="content-page__page-title-text post-item__data--title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php endif; ?>
  </div>
  <div class="post-item__data--thumbnail">
    <span class="post-item__thumbnail__img-mask">
      <?php if (has_post_thumbnail()) : ?>
        <span style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')" class="post-item__data--thumbnail__img-img"></span>
      <?php else : ?>
        <span class="post-item__data--thumbnail__img-img"></span>
      <?php endif; ?>
    </span>
  </div>
  <div class="post-item__info">
    <?php if (!is_home() && !is_front_page() && !is_page()) : ?>
      <div class="post-item__info-item">
        <span class="post-item__data--date"><?php echo get_the_date(); ?></span>
      </div>
      <div class="post-item__info-item">
        <span class="post-item__data--tags"><?php the_tags(); ?></span>
      </div>
    <?php endif ?>
  </div>
  <div class="post-item__data--content"><?php the_content(); ?></div>
</article>

<?php if (is_single() && current_user_can('administrator')) : ?>
<div class="wp-admin-content-tools">
  <p class="comment-link"><span><?php comments_popup_link('No Comment','1 Comment','% Comments'); ?></span></p>
  <p class="edit-link"><span><?php edit_post_link('Edit','',''); ?></span></p>
</div>
<?php endif; ?>
