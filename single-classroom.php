<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>
            <?php get_template_part('include/sns'); ?>
            <article class="post">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <section class="inst-box mb30">
                        <h3 class="post-title mb20">INSTRUCTORS</h3>
                        <ul>
                            <?php //講師表示
                            $product_terms = wp_get_post_terms($post->ID, 'classroom_category', array("fields" => "slugs"));
                            $args = array(
                                    'post_type' => 'instructors', // カスタム投稿「講師」
                                    'tax_query' => array( // カスタムタクソノミー
                                            array(
                                                    'taxonomy' => 'classroom_category',
                                                    'field' => 'slug',
                                                    'terms' => $product_terms,
                                            ),
                                    ),
                                    'posts_per_page' => -1,
                                    'meta_key' => 'kana', //どのキーの値を基準にするか
                                    'orderby' => 'meta_value', //メタ（カスタムフィールドの値）でソートすることを宣言
                                    'order' => 'ASC'
                            );
                            $the_query = new WP_Query($args);
                            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li>
                                    <div class="mb10"><img src="<?php the_field('写真'); ?>"
                                                           alt="<?php the_title(); ?>"/></div>
                                    <h3><?php the_title(); ?></h3>
                                    <h4><?php the_field('担当'); ?></h4>
                                    <h5><?php the_field('出身大学'); ?></h5>
                                </li>
                                <?php wp_reset_postdata(); endwhile; ?>
                        </ul>
                    </section>
                    <?php
                    //if($_SERVER["REMOTE_ADDR"]=="117.102.176.231"){
                    include __DIR__ . "/carousel/include.php";
                    //}
                    ?>
                    <?php the_content(); ?>
                
                    <section class="sns-box clearfix mb30">
                        <ul>
                            <?php if (get_field('line_url')): ?>
                                <li class="mr10"><a
                                            href="https://liff.line.me/1656872021-gB4GGQbK/b8fd2d84af6c4729bcd0743e7e4565e0"
                                            target="_blank" class="line_banner">LINE公式アカウント</a></li>
                            <?php endif; ?>
                            <?php if (is_mobile()) : ?>
                        </ul>

                        <ul>
                            <?php endif; ?>
                            <?php if (get_field('facebook')): ?>
                                <li class="mr10"><a href="<?php the_field('facebook'); ?>" class="fb_banner"
                                                    target="_blank"><i class="fa fa-facebook wht"
                                                                       aria-hidden="true"></i></a></li>
                            <?php endif; ?>

                            <?php if (get_field('twitter')): ?>
                                <li><a href="<?php the_field('twitter'); ?>" class="tw_banner" target="_blank"><i
                                                class="fa fa-twitter wht" aria-hidden="true"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </section>

                <?php endwhile; else : ?>
                    <p>お探しのページは見つかりませんでした。</p>
                    <p>お手数ですが、<a href="<?php echo esc_url(home_url('/')); ?>">トップページへお戻りください。</a>
                    </p>
                <?php endif; ?>
            </article>

        </div><!-- left-contents -->

        <?php if (is_mobile()): ?>
        <?php else: ?>
            <?php get_template_part('include/side_classroom'); ?>
        <?php endif; ?>

    </div><!-- page-contents -->

<?php get_footer(); ?>