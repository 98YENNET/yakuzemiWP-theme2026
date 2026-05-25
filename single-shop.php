<?php get_header(); ?>

    <div class="contents
	<?php if (has_term('large_shop', 'shop_tax')): ?> large_shop
	<?php elseif (has_term('restaurant', 'shop_tax')): ?> restaurant
	<?php elseif (has_term('product_sales', 'shop_tax')): ?> product_sales
	<?php elseif (has_term('service', 'shop_tax')): ?> service
	<?php endif; ?>
">

        <div class="left">

            <?php if (have_posts()) : ?>
            <section class="shop-data">
                <h1 class="m01">ショップガイド</h1>
                <?php while (have_posts()) : the_post(); ?>
                    <h2 class="shop-title"><?php the_title(); ?><span
                                class="kana"><?php the_field('ふりがな'); ?></span></h2>
                    <div class="sd-wrapper">
                        <div class="sd-left">
                            <div class="shop-banner">
                                <?php if (get_field('店舗バナー')): ?>
                                    <img src="<?php the_field('店舗バナー'); ?>" alt="<?php the_title(); ?>"/>
                                <?php else: ?>
                                    <img src="http://www.yakuzemi.ac.jp/yz/wp-content/themes/yakuzemi/images/logo-no-image.png"/>
                                <?php endif; ?>
                            </div>
                            <div class="shop-image">
                                <?php if (get_field('店舗写真')): ?>
                                    <img src="<?php the_field('店舗写真'); ?>" alt="<?php the_title(); ?>"/>
                                <?php else: ?>
                                    <img src="http://www.yakuzemi.ac.jp/yz/wp-content/themes/yakuzemi/images/no-image_shop.png"/>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="sd-right">
                            <?php if (get_field('店舗紹介文')): ?>
                                <p><?php the_field('店舗紹介文'); ?></p>
                            <?php endif; ?>
                            <dl>
                                <dt>カテゴリ</dt>
                                <dd><?php the_field('カテゴリ'); ?></dd>
                            </dl>
                            <dl>
                                <dt>営業時間</dt>
                                <dd><?php the_field('営業時間'); ?></dd>
                            </dl>
                            <dl>
                                <dt>場所</dt>
                                <dd><?php the_field('場所'); ?></dd>
                            </dl>
                            <dl>
                                <dt>電話番号</dt>
                                <dd><?php the_field('電話番号'); ?></dd>
                            </dl>
                            <?php if (get_field('ホームページ')): ?>
                                <dl>
                                    <dt>ホームページ</dt>
                                    <dd><a href="<?php the_field('ホームページ'); ?>"
                                           target="_blank"><?php the_field('ホームページ'); ?></a></dd>
                                </dl>
                            <?php endif; ?>
                            <?php if (get_field('facebook')): ?>
                                <dl>
                                    <dt>facebook</dt>
                                    <dd><?php the_field('facebook'); ?></dd>
                                </dl>
                            <?php endif; ?>
                        </div>
                    </div><!-- sd-wrapper -->

                    <?php the_content(); ?>
                <?php endwhile; else : ?>
                    <p>お探しのショップは見つかりませんでした。</p>
                    <p>お手数ですが、<a href="<?php echo esc_url(home_url('/')); ?>">トップページへお戻りください。</a>
                    </p>
                <?php endif; ?>
            </section>

            <section class="shop-news mb50">
                <h2 class="shop-title">このショップからのお知らせ</h2>
                <?php //ショップのお知らせ表示
                $product_terms = wp_get_post_terms($post->ID, 'shop_category', array("fields" => "slugs"));
                $args = array(
                        "post_type" => "shop-news", // カスタム投稿「ショップニュース」
                        'posts_per_page' => 10, // 1ページあたりの記事数
                        'tax_query' => array( // カスタムタクソノミー
                                array(
                                        'taxonomy' => 'shop_category',
                                        'field' => 'slug',
                                        'terms' => $product_terms,
                                )
                        )
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                    <section class="sn-wrapper">
                        <div class="sn-left">
                            <?php if (get_field('写真')): ?>
                                <?php
                                $attachment_id = get_field('写真');
                                $size = "medium"; // (thumbnail, medium, large, full or custom size)
                                $image = wp_get_attachment_image_src($attachment_id, $size);
                                ?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>"/></a>
                            <?php else: ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php $object = get_field('ショップリンク'); ?>
                                    <img src="<?php the_field('店舗写真', $object->ID); ?>"/>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="sn-right">
                            <time datetime="<?php the_time(__('Y-m-d')) ?>"><?php the_time(__('Y.m.d')) ?></time>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php
                                if (mb_strlen($post->post_content) > 130) {
                                    $content = mb_substr($post->post_content, 0, 130);
                                    echo $content . ･･･;
                                } else {
                                    echo $post->post_content;
                                }
                                ?></p>
                        </div>
                    </section>
                    <?php wp_reset_postdata(); endwhile; else : ?>
                    <p>現在このショップからのお知らせはありません。</p>
                    <?php wp_reset_postdata(); endif; ?>
            </section>

            <section class="shop-news mb50">
                <h2 class="shop-title">同じジャンルのショップ</h2>
                <div class="category">
                    <?php // 同じジャンルのショップ表示
                    $shop_term = wp_get_post_terms($post->ID, 'shop_tax', array("fields" => "slugs"));
                    $args = array(
                            'post_type' => 'shop', // カスタム投稿「ショップガイド」
                            'posts_per_page' => -1, // 1ページあたりの記事数
                            'post__not_in' => array(get_the_ID()), //現在表示している投稿を除外
                            'tax_query' => array( // カスタムタクソノミー
                                    array(
                                            'taxonomy' => 'shop_tax',
                                            'field' => 'slug',
                                            'terms' => $shop_term,
                                    )
                            )
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                        <dl>
                            <dt class="shop-list">
                                <svg class="list">
                                    <use xlink:href="#list"/>
                                </svg>
                            </dt>
                            <dd class="shop-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                            <dd class="shop-cat"><?php the_field('カテゴリ'); ?></dd>
                            <dd class="shop-tel_02"><?php the_field('電話番号'); ?></dd>
                        </dl>
                        <?php wp_reset_postdata(); endwhile; endif; ?>
                </div>
            </section>

        </div><!-- left -->

        <?php get_sidebar(); ?>

    </div><!-- contents -->

<?php get_footer(); ?>