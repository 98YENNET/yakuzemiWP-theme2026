<?php
/**
 * Template Name: 講習会情報一覧用 */
?>

<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>
            <?php get_template_part('include/sns'); ?>

            <?php
            $paged = (int)get_query_var('paged');
            $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 15,
                    'paged' => $paged,
                    'orderby' => 'meta_value',
                    'meta_key' => '実施日',
                    'order' => 'ASC',
                    'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : ?>
                <article class="post mb50">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <ul class="news list_border mb30">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li>
                                <div class="flt-L">
                                    <?php get_template_part('include/class_category_label'); ?>
                                    <time datetime="<?php the_field('実施日') ?>"><?php $date = date_create('' . get_field('実施日') . '');
                                        echo date_format($date, 'Y.m.d'); ?><?php the_field('開始実施選択'); ?></time>
                                </div>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </article>
            <?php endif; ?>

            <?php
            if ($the_query->max_num_pages > 1) {
                echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => 'page/%#%/',
                        'current' => max(1, $paged),
                        'total' => $the_query->max_num_pages
                ));
            }
            ?>

            <?php wp_reset_postdata(); ?>

        </div><!-- left-contents -->

        <?php get_sidebar(); ?>

    </div><!-- page-contents -->

<?php get_footer(); ?>