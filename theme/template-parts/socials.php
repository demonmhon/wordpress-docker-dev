<?php if (have_rows('socials', 'option')) : ?>
<div class="socials">
  <ul class="socials">
    <?php foreach (get_field('socials', 'option') as $platform): ?>
      <li class="socials__list-item">
        <a href="<?php echo htmlspecialchars($platform['url']) ?>" target="_blank">
          <i class="icon fab fa-<?php echo get_social_network_icon_class($platform['type']) ?>"></i>
          <?php if ($platform['label']) : ?>
            <span class="name"><?php echo htmlspecialchars($platform['label']) ?></span>
          <?php endif ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>
