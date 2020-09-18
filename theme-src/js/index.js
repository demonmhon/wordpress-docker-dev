// index.js

import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/dropdown';
import 'bootstrap/js/dist/util';

(function ($) {
  /**
   * Sl: Selector
   * El: Element
   */
  const headerEl = $('.layout__header');
  const navTogglerSl = '.navbar-toggler';
  const navSl = '#nav-menu--main';

  $(document).ready(function() {
    uiNav();
    frontPageSlide();
  });

  /**
   * Functions
   */
  function loadFonts() {
    // https://github.com/typekit/webfontloader
    WebFont.load({
      google: {
        families: []
      }
    });
  }

  function uiNav() {
    $(`[data-target="${navSl}"]`).on('click', function(e) {
      $('html').toggleClass('show-nav');
      $(this).find('.hamburger').toggleClass('is-active');
    });

    $('html').on('mouseup touchmove', function(e) {
      if ($('html').hasClass('show-nav')) {
        const target = $(navSl).is(e.target);
        const contain = headerEl.has(e.target).length;
        if (!target && !contain) {
          headerEl.find(navTogglerSl).click();
        }
      }
    });
  }

  function frontPageSlide() {}
})(jQuery);
