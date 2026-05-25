<?php get_header(); ?>
    <!-- wlc single.php -->
    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>
            <?php get_template_part('include/sns'); ?>

            <article class="post mb50">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <time class="single-date"
                          datetime="<?php the_field('実施日') ?>"><?php $date = date_create('' . get_field('実施日') . '');
                        echo date_format($date, 'Y.m.d'); ?><?php the_field('開始実施選択'); ?></time>
                    <div class="tags">
                        <?php include __DIR__ . "/wlc/pages/lectures/tag.inc.php"; ?>
                    </div>
                    <section class="mb50">
                        <?php the_field('文章') ?>
                    </section>

                    <section class="mb50">
                        <?php if (get_field('チラシ画像')): while (the_repeater_field('チラシ画像')): ?>
                            <div class="mb30">
                                <?php if (get_sub_field('画像')) {
                                    $max = wp_get_attachment_image_src(get_sub_field('画像'), 'full');
                                    echo '<img src="' . $max[0] . '" />';
                                }
                                ?>
                            </div>
                            <?php wp_reset_postdata(); endwhile; endif; ?>
                    </section>

                    <section class="mb50">
                        <h2 class="sec-midashi">日程</h2>
                        <?php the_field('日程') ?>
                    </section>

                    <section class="mb50">
                        <h2 class="sec-midashi">会場</h2>
                        <?php the_field('会場') ?>
                    </section>

                    <?php if (get_field('自由項目')): ?>
                        <?php if (have_rows('自由項目')): while (have_rows('自由項目')): the_row(); ?>
                            <section class="mb50">
                                <?php if (get_sub_field('項目名')): ?>
                                    <h2 class="sec-midashi"><?php the_sub_field('項目名'); ?></h2>
                                <?php endif; ?>
                                <?php the_sub_field('内容'); ?>
                            </section>
                            <?php wp_reset_postdata(); endwhile; endif; ?>
                    <?php endif; ?>

                    <section class="mb50">
                        <h2 class="sec-midashi">キャンセル・注意事項について</h2>
                        <p>有料の講習会における入金後のキャンセルは、1キャンセル毎に返金事務手数料として￥1,000
                            （税込）かかります。詳細は、<a href="https://www.yakuzemi.ac.jp/cancellpolicy/" target="_blank">講習会キャンセルポリシー</a>を必ずご確認ください。<br/>
                            <br/>
                            無料講習会のキャンセルには手数料の発生がありませんが、対面受講・Zoom受講ともに参加枠を空けていただくため、必ずキャンセル処理をお願いいたします。<br/>
                            <br/>
                            ■Zoom受講の場合<br/>
                            資料発送後（資料ダウンロードURL送信後を含む）のキャンセルは、お受けいたしかねます。また、<a
                                    href="https://www.yakuzemi.ac.jp/cancellpolicy/#zoom"
                                    target="_blank">Zoom受講時の注意事項</a>も事前にご確認をお願いいたします。</p>
                        <?php if (get_field('申し込みURL')): ?>
                            <p><a href="<?php the_field('申し込みURL'); ?>" class="button"
                                  target="_blank">講習会のお申し込みはこちら</a></p>
                        <?php else : ?>
                            <p><a href="https://student.yakuzemi.ac.jp/" class="button"
                                  target="_blank">講習会のお申し込みはこちら</a></p>
                        <?php endif; ?>
                        <p><a href="https://www.yakuzemi.ac.jp/cancellpolicy/" target="_blank">講習会キャンセルポリシー・Zoom受講時の注意事項はこちら</a>
                        </p>
                    </section>

                <?php endwhile; else : ?>
                    <p>お探しのお知らせは見つかりませんでした。</p>
                    <p>お手数ですが、<a href="<?php echo esc_url(home_url('/')); ?>">トップページへお戻りください。</a>
                    </p>
                <?php endif; ?>
            </article>

            <section class="info-area mb50">
                <h1 class="mb20">
                    <svg class="icon icon_pencil">
                        <use xlink:href="#icon_pencil"/>
                    </svg>
                    その他講習会情報
                </h1>
                <ul class="news mb30">
                    <?php //講習会情報
                    $loop = new WP_Query(array(
                            'post_type' => 'post',
                            'post__not_in' => array(get_the_ID()), //現在表示している投稿を除外
                            'posts_per_page' => 8, //1ページあたりの記事数
                            'orderby' => 'meta_value',
                            'meta_key' => '実施日',
                            'order' => 'ASC',
                    ));
                    if ($loop->have_posts()) : while ($loop->have_posts()): $loop->the_post();
                        ?>
                        <li>
                            <div class="flt-L">
                                <?php get_template_part('include/class_category_label'); ?>
                                <time datetime="<?php the_field('実施日') ?>"><?php $date = date_create('' . get_field('実施日') . '');
                                    echo date_format($date, 'Y.m.d'); ?><?php the_field('開始実施選択'); ?></time>
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