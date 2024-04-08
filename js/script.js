const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    autoplay: {     //追記
        delay: 4000,   //追記
    },              //追記

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },

});

const pagetop_btn = document.querySelector(".p__pagetop");

// .pagetopをクリックしたら
pagetop_btn.addEventListener("click", scroll_top);
// ページ上部へスムーズに移動
function scroll_top() {
window.scroll({ top: 0, behavior: "smooth" });
}

// スクロールされたら表示
window.addEventListener("scroll", scroll_event);
function scroll_event() {
if (window.pageYOffset > 100) {
pagetop_btn.style.opacity = "1";
} else if (window.pageYOffset < 100) {
pagetop_btn.style.opacity = "0";
}
}

$(function () {
    $('.p__drawer').click(function () {
        $('.p__drawer').toggleClass('active');
        $('.p__drawer-content').toggleClass('open');
        $('.p__drawer-background').toggleClass('is-checked');
    });
});