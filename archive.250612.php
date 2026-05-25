<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>

            <article class="post mb50">
                <h1 class="page-title">
                    <?php if (is_tax('info_category')): ?>
                        <?php single_cat_title(); ?>一覧
                    <?php else: ?>
                        <?php single_cat_title(); ?> 講習会情報一覧
                    <?php endif; ?>
                </h1>

                <div class="top-news">
                    <?php if (have_posts()) : ?>
                        <ul class="news list_border">
                            <?php while (have_posts()) : the_post(); ?>
                                <li>
                                    <div class="flt-L">
                                        <?php get_template_part('include/class_category_label'); ?>
                                        <?php if (is_tax('info_category')): ?>
                                            <time datetime="<?php the_time(__('Y-m-d')) ?>"><?php the_time(__('Y.m.d')) ?></time>
                                        <?php else: ?>
                                            <time datetime="<?php the_field('実施日') ?>"><?php $date = date_create('' . get_field('実施日') . '');
                                                echo date_format($date, 'Y.m.d'); ?><?php the_field('開始実施選択'); ?></time>
                                        <?php endif; ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php else: ?>
                        <?php if (is_tax('info_category')): ?>
                            <p>現在<?php single_cat_title(); ?>はありません</p>
                        <?php else: ?>
                            <p>現在この教室の講習会情報はありません</p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

            </article>

            <div class="pagination"><?php wp_pagination(); ?></div>

        </div><!-- left-contents -->

        <?php get_sidebar(); ?>

    </div><!-- page-contents -->

<?php get_footer(); ?>