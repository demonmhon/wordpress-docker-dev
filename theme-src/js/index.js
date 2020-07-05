// index.js

import './vendor/popper/popper.min';
import './vendor/bootstrap/collapse';
import './vendor/bootstrap/dropdown';
import './vendor/bootstrap/util';

(function ($) {
  let headerEl = $('.layout__header');
  let navSl = '#nav-menu--main';

  uiNav();
  frontpageSlide();

  function uiNav () {
    $('[data-target="' + navSl + '"]').on('click', function () {
      $('html').toggleClass('show-nav');
      $(this)
        .find('.hamburger')
        .toggleClass('is-active');
    });

    $('html').on('mouseup touchmove', function (e) {
      if ($('html').hasClass('show-nav')) {
        let target = $(navSl).is(e.target);
        let contain = headerEl.has(e.target).length;
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

  function frontpageSlide () {}
})(jQuery);
