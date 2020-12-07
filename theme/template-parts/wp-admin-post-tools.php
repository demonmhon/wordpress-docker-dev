<?php if (is_single() && current_user_can('administrator')) : ?>
<div class="wp-admin-post-tools">
  <p class="comment-link"><span><?php comments_popup_link('No Comment','1 Comment','% Comments'); ?></span></p>
  <p class="edit-link"><span><?php edit_post_link('Edit','',''); ?></span></p>
</div>
<?php endif; ?>
