<article id="post-<?php the_ID(); ?>" <?php post_class('post-item post-item--summary'); ?>>
  <div class="post-post-title">
    <?php if (is_home() || is_front_page()) : ?>
      <h2 class="post-item__post-title-text"><?php bloginfo('title'); ?></h2>
    <?php elseif (is_single() || is_page()) : ?>
      <h1 class="post-item__post-title-text"><?php the_title(); ?></h1>
    <?php else: ?>
      <h2 class="post-item__post-title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php endif; ?>
  </div>
  <div class="post-item__excerpt"><?php the_excerpt(); ?></div>
</article>
