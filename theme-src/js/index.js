// index.js

import './vendor/bootstrap/collapse';
import './vendor/bootstrap/dropdown';
import './vendor/bootstrap/util';

(function ($) {
  const headerEl = $('.layout__header');
  const navTogglerSl = '.navbar-toggler';
  const navSl = '#nav-menu--main';

  uiNav();
  frontPageSlide();

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
