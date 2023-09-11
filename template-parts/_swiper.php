<div class="l__swiper">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img media="(min-width: 768px)" class="" src="<?php echo get_template_directory_uri(); ?>/img/01/img_mainvisual1.jpg" alt="">
                <img class="u-hidden-tab u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/img/01-(sp)/img_mainvisual1_sp.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img media="(min-width: 768px)" class="u-hidden-sp" src="<?php echo get_template_directory_uri(); ?>/img/01/img_mainvisual2.jpg" alt="">
                <img class="u-hidden-tab u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/img/01-(sp)/img_mainvisual2_sp.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img media="(min-width: 768px)" class="u-hidden-sp" src="<?php echo get_template_directory_uri(); ?>/img/01/img_mainvisual3.jpg" alt="">
                <img class="u-hidden-tab u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/img/01-(sp)/img_mainvisual3_sp.jpg" alt="">
            </div>
        </div>

        <?php get_template_part('template-parts/pickup_by_tag'); ?>

        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <div class="l__swiper-txt">
            <h2 class="l__swiper-txt__wrapper">
                <p class="l__swiper-txt__ttl">パスタとコーヒーが<br class="u-hidden-pc">とってもおいしい、</p>
                <p class="l__swiper-txt__ttl">ほっと落ち着くのんびり空間。</p>
            </h2>
        </div>
    </div>
</div>