<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>

            <section class="post mb50">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <section class="mt50">
                        <h2 class="sec-subheading"><?php the_title(); ?></h2>
                        <ul class="mb30">
                            <?php if (get_field('訂正リスト')): while (the_repeater_field('訂正リスト')): ?>
                                <li class="mb5">
                                    <a href="<?php the_sub_field('訂正版PDF'); ?>"><?php the_sub_field('訂正リストタイトル'); ?></a>
                                    <?php if (get_sub_field('更新日の表示') == '表示する'): ?>
                                        <?php
                                        $dateformatstring = "　Y.n.j 更新";
                                        $unixtimestamp = strtotime(get_sub_field('更新日'));
                                        echo date_i18n($dateformatstring, $unixtimestamp);
                                        ?>
                                    <?php endif; ?>
                                </li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </section>
                <?php endwhile; else : ?>
                    <p>お探しのお知らせは見つかりませんでした。</p>
                    <p>お手数ですが、<a href="<?php echo esc_url(home_url('/')); ?>">トップページへお戻りください。</a>
                    </p>
                <?php endif; ?>
            </section>

        </div><!-- left-contents -->

        <?php get_sidebar(); ?>

    </div><!-- page-contents -->

<?php get_footer(); ?>