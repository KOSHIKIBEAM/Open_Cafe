<!-- pickup -->
<div class="pickup">

    <?php $pickup_query = new WP_Query(
        array(
            'post_type'      => 'post', // 投稿タイプ
            'tag'            => 'pickup', // pickupタグがついたものを 
            'posts_per_page' => 1 // 1件取得
        )
    );
    ?>

    <?php if ($pickup_query->have_posts()) : ?>
        <?php while ($pickup_query->have_posts()) : ?>
            <?php $pickup_query->the_post(); ?>

            <a class="l__swiper-picup" href="">
                <div class="p__picup-img-wrapper">
                    <div class="p__picup-tag">
                        <?php // カテゴリー１つ目の名前を表示
                        $category = get_the_category();
                        ?>
                        <?php if ($category[0]) : ?>
                            <?php echo $category[0]->name; ?>
                        <?php endif; ?>
                    </div>
                    <div class="p__picup-img">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('my_thumbnail');
                        } else {
                            echo '<img src="' . 'http://koshikibeam.website/open_cafe/wp-content/uploads/2023/06/noimg.png" alt="">';
                        }
                        ?>
                    </div>
                </div>

                <div class="p__picup-body">
                    <time class="p__picup-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                    <div class="p__picup-txt"><?php
                                                if (mb_strlen($post->post_title) > 40) {
                                                    $title = mb_substr($post->post_title, 0, 40);
                                                    echo $title . '...';
                                                } else {
                                                    echo $post->post_title;
                                                }
                                                ?>
                    </div>
                </div>
            </a>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

</div><!-- /pickup -->