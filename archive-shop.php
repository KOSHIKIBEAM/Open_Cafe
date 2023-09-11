<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'shop',
    'showposts' => -1,
); ?>

<main>
    <section class="l__shop">
        <div class="l__section l__inner">
            <div class="p__shop">
                <?php $wp_query = new WP_Query($args); ?>
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <div class="p__shop-contents">
                        <h1 class="p__shop-shopname"><?php the_field('shop_name'); ?></h1>
                        <?php if (get_field('map')) : ?>
                            <div class="p__shop-map">
                                <?php the_field('map'); ?></div>
                        <?php endif; ?>
                        <div class="p__shop-info">
                            <div class="p__shop-pc-left">
                                <?php if (get_field('address')) : ?>
                                    <div class="p__shop-body">
                                        <div class="p__shop-ttl">住所</div>
                                        <div class="p__shop-txt"><?php the_field('post_code'); ?><br><?php the_field('address'); ?></div>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('tel')) : ?>
                                    <div class="p__shop-body">
                                        <div class="p__shop-ttl">TEL</div>
                                        <div class="p__shop-txt"><?php the_field('tel'); ?></div>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('mail')) : ?>
                                    <div class="p__shop-body">
                                        <div class="p__shop-ttl">Mail</div>
                                        <div class="p__shop-txt"><?php the_field('mail'); ?></div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="p__shop-pc-right">
                                <?php if (get_field('open_shop')) : ?>
                                    <div class="p__shop-body">
                                        <div class="p__shop-ttl">営業時間</div>
                                        <div class="p__shop-txt"><?php the_field('open_shop'); ?><br><?php the_field('last_order'); ?></div>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('close_shop')) : ?>
                                    <div class="p__shop-body">
                                        <div class="p__shop-ttl">定休日</div>
                                        <div class="p__shop-txt"><?php the_field('close_shop'); ?></div>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('seat')) : ?>
                                    <div class="p__shop-body">
                                        <div class="p__shop-ttl">座席</div>
                                        <div class="p__shop-txt"><?php the_field('seat'); ?></div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <!-- l__access -->
    <?php get_template_part('template-parts/access'); ?>

</main>
<?php get_footer(); ?>