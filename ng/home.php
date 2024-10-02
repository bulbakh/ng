<?php get_header(); ?>

    <div class="content">

        <?php if ( have_posts() ) : ?>

            <div class="stickywrap"><div>
                    <?php while ( have_posts() ): the_post(); ?>

                        <?php get_template_part('content-blog'); ?>

                    <?php endwhile; ?>
                </div></div>

        <?php endif; ?>

        <?php get_template_part('inc/pagination'); ?>

    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>