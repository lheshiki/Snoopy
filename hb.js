$(function () {
    $('.navbar_toggle').on('click', function () {
      $(this).toggleClass('open');
      $('.hb_menu').toggleClass('open');
    });
  });