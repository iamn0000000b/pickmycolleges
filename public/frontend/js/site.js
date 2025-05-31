$(document).ready(function () {

    $('a[href="#"]').attr('href', 'javascript:void(0)');

    $(".navigation > ul > li > a").each(function () {
        if (this.href == window.location.href) {
            $(this).addClass("ActiveNav");
        }
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.scrollUp').fadeIn();
        } else {
            $('.scrollUp').fadeOut();
        }
    });

    $('.scrollUp').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('body').addClass('stickyheader');
        } else {
            $('body').removeClass('stickyheader');
        }
    });

    $('.closebtn').click(function () {
        $(".navigation").animate({ right: '-70%' });

    });

    $(".my-bars").click(function () {
        $(".navigation").animate({ right: '0px' });
    });

    $(".open").click(function () {
        $(".gettouch").toggleClass('quiry');
    });

});

