<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>

            <div class="post mb50">

                <h1 class="page-title">追補・書籍訂正情報</h1>
                <section class="mb50">
                    <p>平素は弊社書籍をご利用いただきまして、誠にありがとうございます。<br>
                        さて、この度当校編集の書籍に不備･補足項目が見つかりましたので、訂正表を作成いたしました。<br>
                        ご利用の皆様には大変ご迷惑をおかけいたしました。謹んでお詫び申し上げます。<br>
                        なお、本件につきましてのお問い合わせは<br>
                        薬学ゼミナール書籍管理係049-241-5445（土･日･祝除く9:00～17:00）までお願いいたします。</p>

                    <a href="#kako">過去販売書籍の訂正表</a>
                </section>


                <section class="mb50">
                    <!-- <h1 class="sec-title mb20">追補</h1> -->
                    <?php
                    $loop = new WP_Query(array(
                            'post_type' => 'textbook_correction',
                            'posts_per_page' => -1,
                            'tax_query' => array( // カスタムタクソノミー
                                    array(
                                            'taxonomy' => 'correction-cat',
                                            'field' => 'slug',
                                            'terms' => 'tsuiho',
                                    )
                            ),
                            'orderby' => 'meta_value',
                            'meta_key' => '表示順',
                            'order' => 'ASC' //昇順か降順かを指定。ASCは小さい順。DESCは大きい順
                    ));
                    if ($loop->have_posts()):while ($loop->have_posts()):$loop->the_post();
                        ?>
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
                    <?php endwhile; endif;
                    wp_reset_postdata(); ?>
                </section>


                <section class="mb50">
                    <h1 class="sec-title mb20">追補・訂正表</h1>
                    <?php
                    $loop = new WP_Query(array(
                            'post_type' => 'textbook_correction',
                            'posts_per_page' => -1,
                            'tax_query' => array( // カスタムタクソノミー
                                    array(
                                            'taxonomy' => 'correction-cat',
                                            'field' => 'slug',
                                            'terms' => 'new',
                                    )
                            ),
                            'orderby' => 'meta_value',
                            'meta_key' => '表示順',
                            'order' => 'ASC' //昇順か降順かを指定。ASCは小さい順。DESCは大きい順
                    ));
                    if ($loop->have_posts()):while ($loop->have_posts()):$loop->the_post();
                        ?>
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
                    <?php endwhile; endif;
                    wp_reset_postdata(); ?>
                </section>

                <a name="kako"></a>
                <section class="mb50">
                    <h1 class="sec-title mb20">過去販売書籍の訂正表</h1>
                    <?php
                    $loop = new WP_Query(array(
                            'post_type' => 'textbook_correction',
                            'posts_per_page' => -1,
                            'tax_query' => array( // カスタムタクソノミー
                                    array(
                                            'taxonomy' => 'correction-cat',
                                            'field' => 'slug',
                                            'terms' => 'old',
                                    )
                            ),
                            'orderby' => 'meta_value',
                            'meta_key' => '表示順',
                            'order' => 'ASC' //昇順か降順かを指定。ASCは小さい順。DESCは大きい順
                    ));
                    if ($loop->have_posts()):while ($loop->have_posts()):$loop->the_post();
                        ?>
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
                    <?php endwhile; endif;
                    wp_reset_postdata(); ?>
                </section>

            </div><!-- post -->

        </div><!-- left-contents -->

        <?php get_sidebar(); ?>

    </div><!-- page-contents -->

<?php get_footer(); ?>