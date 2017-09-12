(function(document , window , $){
    $(document).ready(function(){
        $(".slider").slick({
            slidesToShow: 4,
            prevArrow: '.slider-container .prev',
            nextArrow: '.slider-container .next',
        });
    });
})(document, window, jQuery);

