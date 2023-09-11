<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover">
    <meta name="robots" content="noindex" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&family=Noto+Serif+JP:wght@300;400;500;600&family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <?php wp_head(); ?>
</head>

<body>
    <div class="p-sticky-notice">
        ※当サイトは株式会社デイトラが所有する<br>
        「デイトラWeb制作コース」の完成見本サイトですす
    </div>
    <?php if (is_front_page() ||  is_home()) : ?>
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
            <?php get_template_part('template-parts/swiper'); ?>
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
    <?php else : ?>
        <header class="l__fv">
            <div class="p__fv">
                <div class="p__fv-img">
                    <?php if (is_page('concept')) : ?>
                        <!-- "concept"という投稿スラッグの固定ページが表示されている場合。 -->
                        <img class="u-hidden-sp u-hidden-tab " src="<?php echo get_template_directory_uri(); ?>/img/02/img_firstview_concept.png" alt="">
                        <img class="u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/img/02/img_firstview_concept_sp.png" alt="">
                    <?php elseif (is_page('menu')) : ?>
                        <!-- "menu"という投稿スラッグの固定ページが表示されている場合。 -->
                        <img class="u-hidden-sp u-hidden-tab " src="<?php echo get_template_directory_uri(); ?>/img/03/img_firstview_menu.png" alt="">
                        <img class="u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/img/03/img_firstview_menu.png" alt="">
                    <?php elseif (is_post_type_archive('shop')) : ?>
                        <!-- 指定したカスタム投稿タイプのアーカイブページの場合に表示するコンテンツや処理を記載。 -->
                        <img class="u-hidden-sp u-hidden-tab " src="<?php echo get_template_directory_uri(); ?>/img/06/img_firstview_shop.png" alt="">
                        <img class="u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/img/06/img_firstview_shop.png" alt="">
                    <?php elseif (is_post_type_archive('products')) : ?>
                        <!-- 指定したカスタム投稿タイプのアーカイブページの場合に表示するコンテンツや処理を記載。 -->
                        <img class="u-hidden-sp u-hidden-tab " src="<?php echo get_template_directory_uri(); ?>/img/07/img_firstview_gift.png" alt="">
                        <img class="u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/img/07/img_firstview_gift.png" alt="">
                    <?php elseif (is_archive('news')) : ?>
                        <!-- "news"という投稿スラッグのアーカイブページが表示されている場合。 -->
                        <img class="u-hidden-sp u-hidden-tab " src="<?php echo get_template_directory_uri(); ?>/img/04/img_firstview_news.png" alt="">
                        <img class="u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/img/04/img_firstview_news.png" alt="">
                    <?php elseif (is_page('contact') || is_page('thank')) : ?>
                        <!-- "contact"または"thank"という投稿スラッグの固定ページが表示されている場合。 -->
                        <img class="u-hidden-sp u-hidden-tab " src="<?php echo get_template_directory_uri(); ?>/img/02/img_firstview_concept.png" alt="">
                        <img class="u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/img/02/img_firstview_concept_sp.png" alt="">
                    <?php elseif (is_single()) : ?>
                        <!-- "page-name"という投稿スラッグの投稿ページが表示されている場合。 -->
                        <img class="u-hidden-sp u-hidden-tab " src="<?php echo get_template_directory_uri(); ?>/img/04/img_firstview_news.png" alt="">
                        <img class="u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/img/04/img_firstview_news.png" alt="">
                    <?php elseif (is_404()) : ?>
                        <!-- 404 Not Found ページが表示されている場合。 -->
                    <?php else : ?>
                        <!-- どれにも当てはまらない場合 -->
                    <?php endif; ?>
                </div>
                <div class="c__fv-ttl">
                    <h2 class="c__fv-ttl__en">
                        <?php if (is_page('concept')) : ?>
                            <!-- "concept"という投稿スラッグの固定ページが表示されている場合。 -->
                            CONCEPT
                        <?php elseif (is_page('menu')) : ?>
                            <!-- "menu"という投稿スラッグの固定ページが表示されている場合。 -->
                            MENU
                        <?php elseif (is_post_type_archive('shop')) : ?>
                            <!-- 指定したカスタム投稿タイプのアーカイブページの場合に表示するコンテンツや処理を記載。 -->
                            SHOP
                        <?php elseif (is_post_type_archive('products')) : ?>
                            <!-- 指定したカスタム投稿タイプのアーカイブページの場合に表示するコンテンツや処理を記載。 -->
                            GIFT
                        <?php elseif (is_archive('news')) : ?>
                            <!-- "news"という投稿スラッグのアーカイブページが表示されている場合。 -->
                            NEWS
                        <?php elseif (is_page('contact') || is_page('thank')) : ?>
                            <!-- "contact"または"thank"という投稿スラッグの固定ページが表示されている場合。 -->
                            CONTACT
                        <?php elseif (is_single()) : ?>
                            <!-- "page-name"という投稿スラッグの投稿ページが表示されている場合。 -->
                            NEWS
                        <?php elseif (is_404()) : ?>
                            <!-- 404 Not Found ページが表示されている場合。 -->

                        <?php else : ?>
                            <!-- どれにも当てはまらない場合 -->

                        <?php endif; ?>

                    </h2>
                    <p class="c__fv-ttl__jp">
                        <?php if (is_page('concept')) : ?>
                            <!-- "concept"という投稿スラッグの固定ページが表示されている場合。 -->
                            当店のこだわり
                        <?php elseif (is_page('menu')) : ?>
                            <!-- "menu"という投稿スラッグの固定ページが表示されている場合。 -->
                            メニュー
                        <?php elseif (is_post_type_archive('shop')) : ?>
                            <!-- 指定したカスタム投稿タイプのアーカイブページの場合に表示するコンテンツや処理を記載。 -->
                            店舗一覧
                        <?php elseif (is_post_type_archive('products')) : ?>
                            <!-- 指定したカスタム投稿タイプのアーカイブページの場合に表示するコンテンツや処理を記載。 -->
                            ギフト・贈り物
                        <?php elseif (is_archive('news')) : ?>
                            <!-- "news"という投稿スラッグのアーカイブページが表示されている場合。 -->
                            お知らせ
                        <?php elseif (is_page('contact') || is_page('thank')) : ?>
                            <!-- "contact"または"thank"という投稿スラッグの固定ページが表示されている場合。 -->
                            お問い合わせ
                        <?php elseif (is_single()) : ?>
                            <!-- "page-name"という投稿スラッグの投稿ページが表示されている場合。 -->
                            お知らせ
                        <?php elseif (is_404()) : ?>
                            <!-- 404 Not Found ページが表示されている場合。 -->

                        <?php else : ?>
                            <!-- どれにも当てはまらない場合 -->

                        <?php endif; ?>
                    </p>
                </div>
            </div>

            <button type="button" class="p__drawer">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="p__drawer-background"></div>
            <div class="p__drawer-content">
                <div class="p__drawer-logo">
                    <a href="<?= get_site_url(); ?>" class="p__drawer-logo-link">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/01/logo_light.png" alt="ロゴ">
                    </a>
                </div>
                <nav>
                    <?php if (has_nav_menu('global')) : ?>
                        <nav class="l__top-nav">
                            <?php
                            wp_nav_menu(
                                [
                                    'theme_location' => 'global',
                                    'menu_class' => 'p__drawer-menu',
                                ]
                            );
                            ?>
                        </nav><!-- #site-navigation -->
                    <?php endif; ?>
                </nav>
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
            </div>
        </header>
        <?php get_template_part('template-parts/breadcrumbs'); ?>
    <?php endif; ?>