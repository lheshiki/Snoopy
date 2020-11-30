// ハンバーガー
$(function() {
    console.log('load');
    $('.hamburger').click(function() {
        console.log('hamburger');

        $(this).toggleClass('active');
 
        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }
    });
});