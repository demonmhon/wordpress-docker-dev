<?php

$google_api_key = GOOGLE_API_KEY;

$address = get_field('address', 'option');
$address_text = get_field('address_text', 'option');

?>

<div class="google-maps-container google-maps-container--16-by-9">
  <?php if (is_array($address) && !empty($address)): ?>
  <div class="map-item">
    <div class="marker" data-lat="<?php echo $address['lat'] ?>" data-lng="<?php echo $address['lng'] ?>">
      <span><?php bloginfo('name') ?></span>
    </div>
  </div>
  <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_api_key ?>"></script>
  <?php endif ?>
</div>
