<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta name="theme-color" content="#fff">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover">
    <meta name="robots" content="noindex" />
    <title><?php echo bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&family=Noto+Serif+JP:wght@300;400;500;600&family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S1MLK4HM8H"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S1MLK4HM8H');
</script>
    <?php wp_head(); ?>
</head>

<body>
    <div class="p-sticky-notice">
        ※当サイトは株式会社デイトラが所有する<br>
        「デイトラWeb制作コース」の完成見本サイトですす
    </div>
    <header class="l__header">
        <div class="l__top u-hidden-tab u-hidden-sp">
            <div class="l__top-inner">
                <?php if (has_custom_logo()) : ?>
                    <div class="l__top-logo u-hidden-tab u-hidden-sp"><a href="<?php echo esc_attr(home_url('/')); ?>"><?php the_custom_logo(); ?></a></div>
                <?php else : ?>
                    <div class="site-logo u-hidden-tab u-hidden-sp"><a href="<?php echo esc_attr(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div>
                <?php endif; ?>
                <?php if (has_nav_menu('global')) : ?>
                    <nav class="l__top-nav">
                        <?php
                        wp_nav_menu(
                            [
                                'theme_location' => 'global',
                                'menu_class' => 'p__global-menu', 'u_text-ff-pastaone'
                            ]
                        );
                        ?>
                    </nav><!-- #site-navigation -->
                <?php endif; ?>
                <div class="l__top-sns">
                    <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/01/icon_twitter-dark.svg" alt=""></a>
                    <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/01/icon_instagram-dark.svg" alt=""></a>
                    <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/01/icon_youtube-dark.svg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="l__top-sp u-hidden-pc">
            <div class="l__top-sp-logo">
                <a href="<?= get_site_url(); ?>" class="l__top-sp-link">
                    <img class="u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/img/01-(sp)/logo_light.svg" alt="ロゴ">
                </a>
            </div>
        </div>
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
        <button type="button" class="p__drawer u-hidden-pc">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="p__drawer-background u-hidden-pc"></div>
        <div class="p__drawer-content u-hidden-pc">
            <div class="p__drawer-logo">
                <a href="<?= get_site_url(); ?>" class="p__drawer-logo-link">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/img/01/logo_light.png" alt="ロゴ">
                </a>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="p__drawer-content-txt">TOP</a>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="p__drawer-content-subtxt">トップ</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/concept/')); ?>" class="p__drawer-content-txt">CONCEPT</a>
                        <a href="<?php echo esc_url(home_url('/concept/')); ?>" class="p__drawer-content-subtxt">コンセプト</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="p__drawer-content-txt">MENU</a>
                        <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="p__drawer-content-subtxt">メニュー</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/news/')); ?>" class="p__drawer-content-txt">NEWS</a>
                        <a href="<?php echo esc_url(home_url('/news/')); ?>" class="p__drawer-content-subtxt">お知らせ</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/shop/')); ?>" class="p__drawer-content-txt">SHOP</a>
                        <a href="<?php echo esc_url(home_url('/shop/')); ?>" class="p__drawer-content-subtxt">店舗情報</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/products/')); ?>" class="p__drawer-content-txt">GIFT</a>
                        <a href="<?php echo esc_url(home_url('/products/')); ?>" class="p__drawer-content-subtxt">ギフト・贈り物</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="p__drawer-content-txt">CONTACT</a>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="p__drawer-content-subtxt">お問い合わせ</a>
                    </li>
                </ul>
                <div class="p__drawer-content-sns">
                    <a href="" class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/01/icon_twitter-light.png" alt="">
                    </a>
                    <a href="" class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/01/icon_instagram-light.png" alt="">
                    </a>
                    <a href="" class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/01/icon_youtube-light.png" alt="">
                    </a>
                </div>
            </nav>
        </div>
    </header>