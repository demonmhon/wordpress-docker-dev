// index.js

import './vendor/bootstrap/collapse';
import './vendor/bootstrap/dropdown';
import './vendor/bootstrap/util';

(function ($) {
  const headerEl = $('.layout__header');
  const navSl = '#nav-menu--main';

  uiNav();
  frontPageSlide();

  function uiNav() {
    $(`[data-target="${navSl}"]`).on('click', (e) => {
      $('html').toggleClass('show-nav');
      $(this).find('.hamburger').toggleClass('is-active');
    });

    $('html').on('mouseup touchmove', (e) => {
      if ($('html').hasClass('show-nav')) {
        const target = $(navSl).is(e.target);
        const contain = headerEl.has(e.target).length;
        if (!target && !contain) {
          $(navSl).removeClass('in');
          $('html').removeClass('show-nav');
          headerEl
            .find('.navbar-toggle')
            .attr('aria-expanded', 'false')
            .find('.hamburger')
            .removeClass('is-active');
        }
      }
    });
  }

  function frontPageSlide() {}
})(jQuery);
