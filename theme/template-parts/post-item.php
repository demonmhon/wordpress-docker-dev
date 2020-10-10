<article id="post-<?php the_ID(); ?>" <?php post_class('post-item post-item--full-content'); ?>>
  <div class="post-item__post-title">
    <h2 class="post-item__post-title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </div>
  <div class="post-item__thumbnail">
    <span class="post-item__thumbnail__img-mask">
      <?php if (has_post_thumbnail()) : ?>
        <span style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')" class="post-item__thumbnail__img-img"></span>
      <?php else : ?>
        <span class="post-item__thumbnail__img-img"></span>
      <?php endif; ?>
    </span>
  </div>
  <div class="post-item__info">
    <?php if (!is_home() && !is_front_page() && !is_page()) : ?>
      <div class="post-item__info-item">
        <span class="post-item__info-item--date"><?php echo get_the_date(); ?></span>
      </div>
      <div class="post-item__info-item">
        <span class="post-item__info-item--tags"><?php the_tags(); ?></span>
      </div>
    <?php endif ?>
  </div>
  <div class="post-item__content"><?php the_content(); ?></div>
</article>

<?php if (is_single() && current_user_can('administrator')) : ?>
<div class="wp-admin-content-tools">
  <p class="comment-link"><span><?php comments_popup_link('No Comment','1 Comment','% Comments'); ?></span></p>
  <p class="edit-link"><span><?php edit_post_link('Edit','',''); ?></span></p>
</div>
<?php endif; ?>
