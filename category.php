<?php get_header(); ?>

<main>

    <section class="l__archive">
        <div class="l__section l__inner">
            <div class="p__archive">
                <h2 class="p__archive-ttl"><?php the_archive_title(); // 一覧ページ名を表示 
                                            ?></h2>
                <div class="p__archive-items">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <div class="p__archive-item">
                                <a href="<?php echo esc_url(home_url('/single/')); ?>">
                                    <div class="p__archive-img-wrapper">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('my_thumbnail');
                                        } else {
                                            echo '<img src="' . 'http://koshikibeam.website/open_cafe/wp-content/uploads/2023/06/noimg.png" alt="">';
                                        }
                                        ?>
                                    </div>
                                    <?php $category = get_the_category(); ?>
                                    <?php if ($category[0]) : ?>
                                        <div class="p__archive-tag"><?php echo $category[0]->cat_name; ?></div>
                                    <?php endif; ?>
                                    <div class="p__archive-body">
                                        <div class="p__archive-txt"><?php the_excerpt(); // 抜粋を表示
                                                                    ?></div>
                                        <div class="p__archive-date"><?php the_time('Y/n/j'); ?></div>
                                    </div>
                                </a>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <?php get_template_part('template-parts/pagination'); ?>
            </div>
            <?php get_template_part('template-parts/sidebar'); ?>
        </div>
    </section>
    <?php get_template_part('template-parts/access'); ?>
</main>
<?php get_footer(); ?>