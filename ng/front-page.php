<?php get_header(); ?>
    <div class="content">
        <div class="stickywrap">
            <?= do_shortcode('[metaslider id="77"]'); ?>
            <div class="front-page-blocks">
                <div class="front-page-block"><?php get_template_part('content-services'); ?></div>
                <div class="front-page-block"><?php get_template_part('content-portfolio'); ?></div>
                <div class="front-page-block"><?php get_template_part('content-reviews'); ?></div>
            </div>
        </div>
        <a href="/contacts" class="cta-button">Зв'яжіться з нами</a>
    </div>
<?php get_footer(); ?>