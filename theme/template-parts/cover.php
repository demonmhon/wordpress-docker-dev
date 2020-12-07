<?php

$cover_image = get_the_post_thumbnail_url(get_the_ID(),'full');

?>
<div class="page-cover section section--page-cover">
  <div class="page-cover__bg" <?php if ($cover_image) :?> style="background-image:url('<?php echo $cover_image ?>')"<?php endif ?>></div>
  <div class="page-cover__container">
    <div class="container"></div>
  </div>
</div>
