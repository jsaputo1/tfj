jQuery(document).ready(function($) {
    $(window).scroll( () => {
        if ($(window).scrollTop() >= 370) {
            $('.scroll-arrow').addClass('show'); 
        } else {
            $('.scroll-arrow').removeClass('show');
        }
    });
    $('#scrollToTop').click(function () {
        $(window).scrollTop(0);
    });
});
