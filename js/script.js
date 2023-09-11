
const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    autoplay: {     //追記
        delay: 4000,   //追記
    },              //追記

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },



});

$(function () {
    $('.p__drawer').click(function () {
        $('.p__drawer').toggleClass('active');
        $('.p__drawer-content').toggleClass('open');
        $('.p__drawer-background').toggleClass('is-checked');
    });
});