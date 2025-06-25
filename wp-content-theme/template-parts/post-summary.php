<article id="post-<?php the_ID(); ?>" <?php post_class('post post--summary'); ?>>
  <div class="post__title">
    <h2 class="post__title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </div>
  <div class="post__excerpt"><?php the_excerpt(); ?></div>
</article>
