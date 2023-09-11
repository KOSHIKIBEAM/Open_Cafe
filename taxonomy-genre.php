<?php get_header(); ?>

<main>

    <section class="p__page-menu">
        <div class="l__section l__inner">
            <ul class="tab">
                <?php
                $genre_highlight = get_queried_object();
                $genre_name = $genre_highlight->name;
                ?>
                <li>
                    <?php if ($genre_name == "パスタ") {
                        echo '<a class="active">';
                    } else {
                        echo '<a href="' . esc_url(get_term_link("pasta", "genre")) . '">';
                    } ?><span>パスタ</span>
                    </a>
                </li>
                <li>
                    <?php if ($genre_name == "サラダ") {
                        echo '<a class="active">';
                    } else {
                        echo '<a href="' . esc_url(get_term_link("salad", "genre")) . '">';
                    } ?><span>サラダ</span>
                    </a>
                </li>
                <li>
                    <?php if ($genre_name == "パン& スイーツ") {
                        echo '<a class="active">';
                    } else {
                        echo '<a href="' . esc_url(get_term_link("breadsweets", "genre")) . '">';
                    } ?><span>パン&<br> スイーツ</span>
                    </a>
                </li>
                <li>
                    <?php if ($genre_name == "ドリンク") {
                        echo '<a class="active">';
                    } else {
                        echo '<a href="' . esc_url(get_term_link("drink", "genre")) . '">';
                    } ?><span>ドリンク</span>
                    </a>
                </li>
            </ul>
            <div class="p__content-box">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="p__content-item">
                            <div class="p__content-item-img">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('my_thumbnail');
                                } else {
                                    echo '<img src="' . 'http://koshikibeam.website/open_cafe/wp-content/uploads/2023/06/noimg.png" alt="">';
                                }
                                ?>
                            </div>
                            <div class="p__content-item-body">
                                <div class="p__content-item-ttl"><?php the_title(); ?>
                                </div>
                                <?php if (get_field('price')) : ?>
                                    <div class="p__content-item-price">
                                        <?php the_field('price'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/access'); ?>

</main>
<?php get_footer(); ?>