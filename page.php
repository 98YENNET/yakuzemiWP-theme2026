<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>
            <?php get_template_part('include/sns'); ?>
            <article class="post">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; else : ?>
                    <p>お探しのページは見つかりませんでした。</p>
                    <p>お手数ですが、<a href="<?php echo esc_url(home_url('/')); ?>">トップページへお戻りください。</a>
                    </p>
                <?php endif; ?>
            </article>

        </div><!-- left-contents -->

        <?php if (is_page(array('classroom-and-instructors', 'kawagoe_dorm', 'classroom-maps', 'remedial-support', 'bay-laurel'))) : ?>
            <?php get_template_part('include/side_classroom'); ?>
        <?php else: ?>
            <?php get_sidebar(); ?>
        <?php endif; ?>

    </div><!-- page-contents -->

<?php get_footer(); ?>