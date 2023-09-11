<?php get_header(); ?>

<main>
    <section class="l__page-products">
        <div class="l__section l__inner">
            <div class="p__page-products">
                <div class="p__page-products-contents-top">
                    <div class="p__page-products-item">
                        <article class="p__page-products-card">
                            <div class="p__page-products-thumbnail">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('my_thumbnail');
                                } else {
                                    echo '<img src="' . 'http://koshikibeam.website/open_cafe/wp-content/uploads/2023/06/noimg.png" alt="">';
                                }
                                ?>
                            </div>
                            <div class="p__page-products-body">
                                <div class="p__page-products-name-top"><?php the_title(); ?></div>
                                <div class="p__page-products-price-top">3000 yen</div>
                                <div class="p__page-products-btn"><a href="">ショップで確認する</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="p__page-products-items">
                        <div class="p__page-products-item">
                            <article class="p__page-products-card">
                                <div class="p__page-products-thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/07/img_item2.png" alt="">
                                </div>
                                <div class="p__page-products-body">
                                    <div class="p__page-products-name">○○○○の詰め合わせギフト</div>
                                    <div class="p__page-products-price">3000 yen</div>
                                    <div class="p__page-products-btn"><a href="">ショップで確認する</a></div>
                                </div>
                            </article>
                        </div>
                        <div class="p__page-products-item">
                            <article class="p__page-products-card">
                                <div class="p__page-products-thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/07/img_item3.png" alt="">
                                </div>
                                <div class="p__page-products-body">
                                    <div class="p__page-products-name">○○○○の詰め合わせギフト</div>
                                    <div class="p__page-products-price">3000 yen</div>
                                    <div class="p__page-products-btn"><a href="">ショップで確認する</a></div>
                                </div>
                            </article>
                        </div>
                        <div class="p__page-products-item">
                            <article class="p__page-products-card">
                                <div class="p__page-products-thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/07/img_item4.png" alt="">
                                </div>
                                <div class="p__page-products-body">
                                    <div class="p__page-products-name">○○○○の詰め合わせギフト</div>
                                    <div class="p__page-products-price">3000 yen</div>
                                    <div class="p__page-products-btn"><a href="">ショップで確認する</a></div>
                                </div>
                            </article>
                        </div>
                        <div class="p__page-products-item">
                            <article class="p__page-products-card">
                                <div class="p__page-products-thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/07/img_item5.png" alt="">
                                </div>
                                <div class="p__page-products-body">
                                    <div class="p__page-products-name">○○○○の詰め合わせギフト</div>
                                    <div class="p__page-products-price">3000 yen</div>
                                    <div class="p__page-products-btn"><a href="">ショップで確認する</a></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="p__page-products-contents-bottom">
                    <div class="p__page-products-item">
                        <article class="p__page-products-card">
                            <div class="p__page-products-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/07/img_item6.png" alt="">
                            </div>
                            <div class="p__page-products-body">
                                <div class="p__page-products-name">○○○○の詰め合わせギフト</div>
                                <div class="p__page-products-price">3000 yen</div>
                                <div class="p__page-products-btn"><a href="">ショップで確認する</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="p__page-products-item">
                        <article class="p__page-products-card">
                            <div class="p__page-products-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/07/img_item7.png" alt="">
                            </div>
                            <div class="p__page-products-body">
                                <div class="p__page-products-name">○○○○の詰め合わせギフト</div>
                                <div class="p__page-products-price">3000 yen</div>
                                <div class="p__page-products-btn"><a href="">ショップで確認する</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="p__page-products-item">
                        <article class="p__page-products-card">
                            <div class="p__page-products-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/07/img_item8.png" alt="">
                            </div>
                            <div class="p__page-products-body">
                                <div class="p__page-products-name">○○○○の詰め合わせギフト</div>
                                <div class="p__page-products-price">3000 yen</div>
                                <div class="p__page-products-btn"><a href="">ショップで確認する</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="p__page-products-item">
                        <article class="p__page-products-card">
                            <div class="p__page-products-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/07/img_item9.png" alt="">
                            </div>
                            <div class="p__page-products-body">
                                <div class="p__page-products-name">○○○○の詰め合わせギフト</div>
                                <div class="p__page-products-price">3000 yen</div>
                                <div class="p__page-products-btn"><a href="">ショップで確認する</a></div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="p__page-products-wrap">
                    <div class="p__page-products-wrap-body">
                        <div class="p__page-products-wrap-ttl">ラッピングは無料でお付けいたします。 お気軽にご相談ください。</div>
                        <div class="p__page-products-wrap-txt">テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</div>
                    </div>
                    <div class="p__page-products-wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/img/07/img_wrapping.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/access'); ?>

</main>
<?php get_footer(); ?>