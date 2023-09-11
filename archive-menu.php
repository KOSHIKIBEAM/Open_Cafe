<?php get_header();
?>


<main>

    <section class="p__page-menu">
        <div class="l__section l__inner">


            <ul class="tab">
                <?php
                $genre_terms = get_terms('genre', array('hide_empty' => false));
                foreach ($genre_terms as $genre_term) :
                ?>
                    <li>
                        <a href="<?php echo esc_url(get_term_link($genre_term, 'genre')); ?>"><?php echo esc_html($genre_term->name); ?></a>
                    </li><!-- /.genre-nav-link -->
                <?php
                endforeach;
                ?>
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
                                <div class="p__content-item-price">780 yen
                                </div>
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