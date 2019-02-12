$(window).on("scroll", function () {
    if ($(window).scrollTop()) {
        $(".menu").css("box-shadow", "0px 0px 10px rgba(0, 0, 0, .5)");
    } else {
        $(".menu").css("box-shadow", "none");
    }

})