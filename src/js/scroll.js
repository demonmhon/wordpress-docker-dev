// scroll.js

(function ($) {
  scrollToEl();

  function scrollToEl () {
    $('[data-scroll-ui="true"]').on('click', function () {
      let srcEl = $(this);
      let targetSl = srcEl.attr('href') ? srcEl.attr('href') : srcEl.data('target');
      if (targetSl) {
        let targetEl = $(targetSl);
        if (targetEl.length) {
          let speed = srcEl.data('scroll-speed')
            ? parseInt(srcEl.data('scroll-speed'), 10)
            : 1000;
          $('html, body').animate(
            {
              scrollTop: targetEl.offset().top
            },
            speed
          );
        }
      }
      return false;
    });
  }
})(jQuery);
