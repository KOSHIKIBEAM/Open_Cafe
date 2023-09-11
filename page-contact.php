<?php get_header(); ?>

<main>
    <section class="l__page-contact">
        <div class="l__section l__inner">
            <div class="p__page-contact">
                <h2 class="p__page-contact-ttl">Contact</h2>
                <?php echo do_shortcode('[contact-form-7 id="560" title="コンタクトフォーム 1"]'); ?>
                <!-- /.contact -->
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/access'); ?>
</main>
<?php get_footer(); ?>