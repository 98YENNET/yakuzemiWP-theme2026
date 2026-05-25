<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>
            <article class="post mb50">
                <h1 class="page-title">第103回国家試験 合格者の声</h1>
                <section>
                    <ul class="voices-card">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <li>
                                <h3 class="voices_name"><?php the_title(); ?>
                                    <span>
							<?php $terms = get_the_terms($post->ID, 'classroom_category');
                            foreach ($terms as $term) {
                                $term_name = $term->name;
                                echo $term_name;
                                break;
                            }; ?><br>
							［<?php the_field('出身大学'); ?>］</span>
                                </h3>
                                <?php if (get_field('写真')): ?>
                                    <a href="<?php the_field('写真'); ?>"><img src="<?php the_field('写真'); ?>"
                                                                               alt="<?php the_title(); ?>"/></a>
                                <?php else: ?>
                                    <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/uploads/image_passing_noimg.png"/>
                                <?php endif; ?>
                                <?php the_content(); ?>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>
                </section>
            </article>
            <div class="pagination"><?php wp_pagination(); ?></div>
        </div><!-- left-contents -->

        <?php get_sidebar(); ?>

    </div><!-- page-contents -->

<?php get_footer(); ?>