<?php if (!is_tax('info_category')) { ?>

    <div class="top-news">
        <?php if (have_posts()) : ?>
            <ul class="news list_border">
                <?php while (have_posts()) : the_post(); ?>

                    <?php if (get_post_type() == 'post') { ?>
                        <li>
                            <div class="flt-L">
                                <?php
                                //get_template_part('include/class_category_label');
                                ?>
                                <?php if (is_tax('info_category')): ?>
                                    <time datetime="<?php the_time(__('Y-m-d')) ?>"><?php the_time(__('Y.m.d')) ?></time>
                                <?php else: ?>
                                    <time datetime="<?php the_field('実施日') ?>"><?php $date = date_create('' . get_field('実施日') . '');
                                        echo date_format($date, 'Y.m.d'); ?><?php the_field('開始実施選択'); ?></time>
                                <?php endif; ?>
                            </div>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php } ?>


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

<?php } ?>