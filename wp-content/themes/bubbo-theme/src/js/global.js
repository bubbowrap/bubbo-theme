$(window).scroll(function () {
    if ($(this).scrollTop() >= 1) {
        $('.site-header').addClass('active');
    } else {
        $('.site-header').removeClass('active');
    }
});