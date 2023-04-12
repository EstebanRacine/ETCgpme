$('.carroussel').slick({
    slidesToShow :3,
    prevArrow  : "<i class=\"fa-solid fa-arrow-left\"></i>",
    nextArrow : "<i class=\"fa-solid fa-arrow-right\"></i>"
});


if ($(window).width() < 800) {
    $('.carroussel').slick('slickSetOption', 'slidesToShow', 1);
}else if($(window).width() > 1200){
    $('.carroussel').slick('slickSetOption', 'slidesToShow', 3);
}else{
    $('.carroussel').slick('slickSetOption', 'slidesToShow', 2);
}



$(window).resize(function() {
    if ($(window).width() < 800) {
        $('.carroussel').slick('slickSetOption', 'slidesToShow', 1);
    }else if($(window).width() > 1200){
        $('.carroussel').slick('slickSetOption', 'slidesToShow', 3);
    }else{
        $('.carroussel').slick('slickSetOption', 'slidesToShow', 2);
    }
});

