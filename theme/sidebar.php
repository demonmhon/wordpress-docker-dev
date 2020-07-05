<div class="layout__content__col layout__content__col--side">
    <?php if (is_home() || is_front_page()) : ?>
        <?php if (is_active_sidebar('theme_widgets_front_page')) : ?>
            <?php dynamic_sidebar('theme_widgets_front_page'); ?>
        <?php else : ?><?php endif ?>
    <?php endif ?>
    <?php if (is_active_sidebar('theme_widgets_additional')) : ?>
        <?php dynamic_sidebar('theme_widgets_additional'); ?>
    <?php else : ?><?php endif ?>
</div>
