// index.js

import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/dropdown';
import 'bootstrap/js/dist/util';

import './google-maps';

(function ($) {
  /**
   * Sl: Selector
   * El: Element
   */
  const headerEl = $('.layout__header');
  const navTogglerSl = '.navbar-toggler';
  const navSl = '#nav-menu--main';

  $(document).ready(function () {
    loadFonts();
    uiNav();
    frontPageSlide();
  });

  /**
   * Functions
   */
  function loadFonts () {
    // https://github.com/typekit/webfontloader
    const fonts = ['Open Sans Condensed'];
    WebFont.load({
      google: {
        families: [`${fonts[0]}:300,700`]
      }
    });
    const originFontF = $('body').css('font-family');
    $('body').css({
      'font-family': `${fonts[0]},${originFontF}`,
    });
  }

  function uiNav () {
    $(`[data-target="${navSl}"]`).on('click', function (e) {
      $('html').toggleClass('show-nav');
      $(this).find('.hamburger').toggleClass('is-active');
    });

    $('html').on('mouseup touchmove', function (e) {
      if ($('html').hasClass('show-nav')) {
        const target = $(navSl).is(e.target);
        const contain = headerEl.has(e.target).length;
        if (!target && !contain) {
          headerEl.find(navTogglerSl).click();
        }
      }
    });
  }

  function frontPageSlide () {}
})(jQuery);
