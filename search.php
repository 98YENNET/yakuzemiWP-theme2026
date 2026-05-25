<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">

            <article>
                <h2 class="sec-midashi"><?php printf(__('検索結果: %s'), get_search_query()); ?>
                    ［<?php echo $wp_query->found_posts; ?> 件］</h2>
                <?php if (is_search()): ?>
                <?php else: ?>
                    <p>見つかりませんでした。</p>
                <?php endif; ?>

                <div class="top-news">
                    <ul class="news list_border">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li>
                                <div class="flt-L">
                                    <?php if (get_post_type() === 'post'): ?>
                                        <time datetime="<?php the_field('実施日') ?>"><?php $date = date_create('' . get_field('実施日') . '');
                                            echo date_format($date, 'Y.m.d'); ?><?php the_field('開始実施選択'); ?></time>
                                    <?php else: ?>
                                        <time datetime="<?php the_time(__('Y-m-d')) ?>"><?php the_time(__('Y.m.d')) ?></time>
                                    <?php endif; ?>
                                </div>
                                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>

            </article>

            <div class="pagination"><?php wp_pagination(); ?></div>

        </div><!-- left-contents -->

        <?php get_sidebar(); ?>

    </div><!-- page-contents -->

<?php get_footer(); ?>