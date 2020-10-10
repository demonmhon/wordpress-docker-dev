<div class="section section--pagination">
  <div class="section-content">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <span class="pagination__item pagination__item-pages"><?php echo paginate_links(array('prev_next'=> false )); ?></span>
          <span class="pagination__item pagination__item--next"><?php previous_posts_link('Previous page'); ?></span>
          <span class="pagination__item pagination__item--prev"><?php next_posts_link('Next page'); ?></span>
        </div>
      </div>
    </div>
  </div>
</div>
