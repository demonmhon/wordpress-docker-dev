<article id="post-<?php the_ID(); ?>" <?php post_class('post-item post-item--summary'); ?>>
  <div class="post-item__title">
    <h2 class="post-item__title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </div>
  <div class="post-item__excerpt"><?php the_excerpt(); ?></div>
</article>
