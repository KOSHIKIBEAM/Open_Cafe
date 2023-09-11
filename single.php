<?php get_header(); ?>

<main>
    <section class="l__single">
        <div class="l__section l__inner">
            <div class="p__single">
                <div class="p__single-thumbnail">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('my_thumbnail');
                    } else {
                        echo '<img src="' . 'http://koshikibeam.website/open_cafe/wp-content/uploads/2023/06/noimg.png" alt="">';
                    }
                    ?>
                </div>
                <div class="p__single-body">
                    <h1 class="p__single-ttl"><?php the_title(); ?></h1>
                    <div class="p__single-date">
                        <p>
                            <time datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>　|　
                            <?php // カテゴリー１つ目の名前を表示
                            $category = get_the_category();
                            ?>
                            <?php if ($category[0]) : ?>
                                <a href="<?php echo get_category_link($category[0]->term_id); ?>"><?php echo $category[0]->name; ?>
                                </a>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
                <?php the_content(); // 本文の表示 
                ?>
                <div class="p__single-bottom">
                    <div class="p__single-btn-center"><a href="/news/">記事一覧</a></div>
                    <div class="p__single-btn">
                        <?php if (get_previous_post()) : ?>
                            <div class="p__single-btn-prev"><?php previous_post_link('%link', '前の記事'); ?></div>
                        <?php endif; ?>
                        <?php if (get_next_post()) : ?>
                            <div class="p__single-btn-next"><?php next_post_link('%link', '次の記事'); ?></div>
                        <?php endif; ?>
                    </div>
                </div>


                <!-- entry-related -->
                <div class="p__related-article">
                    <div class="p__related-article-ttl">関連記事</div>

                    <?php if (has_category()) {
                        $post_cats = get_the_category();
                        $cat_ids = array();
                        //所属カテゴリーのIDリストを作っておく
                        foreach ($post_cats as $cat) {
                            $cat_ids[] = $cat->term_id;
                        }
                    }

                    $myposts = get_posts(array(
                        'post_type' => 'post', // 投稿タイプ
                        'posts_per_page' => '6', // ８件を取得
                        'post__not_in' => array($post->ID), // 表示中の投稿を除外
                        'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
                        'orderby' => 'rand' // ランダムに
                    ));

                    if ($myposts) : ?>
                        <div class="p__related-article-items">
                            <?php foreach ($myposts as $post) : setup_postdata($post); ?>
                                <a class="p__related-article-item" href="<?php the_permalink(); ?>">
                                    <?php $category = get_the_category(); ?>
                                    <?php if ($category[0]) : ?>
                                        <div class="p__related-article-tag"><?php echo $category[0]->cat_name; ?></div>
                                    <?php endif; ?>
                                    <div class="p__related-article-img-wrapper">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            // アイキャッチ画像が設定されてればミディアムサイズで表示
                                            the_post_thumbnail('medium');
                                        } else {
                                            // なければnoimage画像をデフォルトで表示
                                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                                        }
                                        ?>
                                    </div>
                                    <div class="p__related-article-body">
                                        <div class="p__related-article-txt u-hidden-sp u-hidden-tab">
                                            <?php
                                            if (mb_strlen($post->post_title) > 40) {
                                                $title = mb_substr($post->post_title, 0, 40);
                                                echo $title . '. . .';
                                            } else {
                                                echo $post->post_title;
                                            }
                                            ?>
                                        </div>
                                        <div class="p__related-article-txt u-hidden-pc">
                                            <?php
                                            if (mb_strlen($post->post_title) > 40) {
                                                $title = mb_substr($post->post_title, 0, 40);
                                                echo $title . '. . .';
                                            } else {
                                                echo $post->post_title;
                                            }
                                            ?>
                                        </div>
                                        <div class="p__related-article-date">
                                            <?php the_time('Y/n/j'); ?>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach;
                            wp_reset_postdata(); ?>
                        </div><!-- /related-items -->
                    <?php endif; ?>
                </div><!-- /entry-related -->
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/access'); ?>

</main>
<?php get_footer(); ?>