$(function () {
    // Smooth scrolling
    $(".down-arrow-anchor").bind("click", function () {
        $("html, body").stop().animate({
            scrollTop: $($(this).attr("href")).offset().top - 50
        }, 1000, "easeInOutExpo");
        event.preventDefault();
    });

    // Add data-wow-delay to social media elements
    function addWowDelay (i, item) {
        var duration = 0.2 * i;
        $(item).attr('data-wow-delay', duration + 's');
    }

    // Only necessary when width > 368px due to responsive design
    if (window.innerWidth > 368) {
        $('.social-media-element').each(addWowDelay);
    }

    // Same for member descriptions where 500px width are the breakpoint
    if (window.innerWidth >= 500) {
        $('.member').each(addWowDelay);
    }

    var wpadminbar = $('#wpadminbar');
    if (wpadminbar.length) {
        $('.navbar-fixed-top').css('margin-top', wpadminbar.height() + 'px');
    }


    // WOW.js
    var wow = new WOW({
        boxClass: "wow",
        animateClass: "animated",
        offset: 150,
        mobile: true,
        live: true
    });
    wow.init();
});