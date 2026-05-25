<?php get_header(); ?>
    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>
            <?php get_template_part('include/sns'); ?>

            <article class="post mb50">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <time class="single-date" datetime="Y-m-d"><?php the_time(__('Y.m.d')) ?></time>
                    <section class="mt20">
                        <?php if (get_field('大見出し')): ?>
                            <h1 class="sec-title"><?php the_field('大見出し') ?></h1>
                        <?php endif; ?>
                        <?php if (get_field('お知らせ記事')): while (the_repeater_field('お知らせ記事')): ?>
                        <div class="clearfix mb50">
                            <?php if (get_sub_field('小見出し')): ?>
                                <h3 class="sec-midashi"><?php the_sub_field('小見出し'); ?></h3>
                            <?php endif; ?>
                            <?php if (get_sub_field('画像')): ?>
                        <?php if (get_sub_field('画像の配置') == 'right'): ?>
                            <div class="image-area-right">
                                <?php elseif (get_sub_field('画像の配置') == 'left'): ?>
                                <div class="image-area-left">
                                    <?php endif; ?>
                                    <?php if (get_sub_field('画像')) {
                                        $img = wp_get_attachment_image_src(get_sub_field('画像'), 'thumbnail');
                                        $max = wp_get_attachment_image_src(get_sub_field('画像'), 'full');
                                        echo '<a href="' . $max[0] . '"><img src="' . $img[0] . '" /></a>';
                                    }
                                    ?>
                                </div>
                                <?php endif; ?>
                                <?php if (get_sub_field('記事内容')): ?>
                                    <p><?php the_sub_field('記事内容'); ?></p>
                                <?php endif; ?>
                            </div>
                            <?php wp_reset_postdata();
                            endwhile;
                            endif; ?>
                            <?php the_content(); ?>
                    </section>
                <?php endwhile; else : ?>
                    <p>お探しのお知らせは見つかりませんでした。</p>
                    <p>お手数ですが、<a href="<?php echo esc_url(home_url('/')); ?>">トップページへお戻りください。</a>
                    </p>
                <?php endif; ?>
            </article>

            <section class="info-area mb50">
                <h1 class="mb20">
                    <svg class="icon icon_megaphone">
                        <use xlink:href="#icon_megaphone"/>
                    </svg>
                    他のお知らせ
                </h1>
                <ul class="news mb30">
                    <?php
                    $loop = new WP_Query(array(
                            'post_type' => 'information',
                            'post__not_in' => array(get_the_ID()), //現在表示している投稿を除外
                            'posts_per_page' => 5, //1ページあたりの記事数
                    ));
                    if ($loop->have_posts()) : while ($loop->have_posts()): $loop->the_post();
                        ?>
                        <li>
                            <div class="flt-L">
                                <?php get_template_part('include/class_category_label'); ?>
                                <time datetime="<?php the_time(__('Y-m-d')) ?>"><?php the_time(__('Y.m.d')) ?></time>
                            </div>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endwhile; endif;
                    wp_reset_postdata(); ?>
                </ul>
            </section>

        </div><!-- left-contents -->

        <?php get_sidebar(); ?>

    </div><!-- page-contents -->

<?php get_footer(); ?>