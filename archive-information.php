<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>

            <article class="post mb50">
                <h1 class="page-title">薬ゼミからのお知らせ一覧</h1>

                <div class="top-news">
                    <ul class="news list_border">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li>
                                <div class="flt-L">
                                    <?php if (has_term('yakuzemi', 'info_category', $post)): ?>
                                        <span class="area-tag info">薬ゼミ</span>
                                    <?php elseif (has_term('tools', 'info_category', $post)): ?>
                                        <span class="area-tag info">新刊情報</span>
                                    <?php elseif (has_term('country-exam', 'info_category', $post)): ?>
                                        <span class="area-tag info">国家試験</span>
                                    <?php elseif (has_term('seminar', 'info_category', $post)): ?>
                                        <span class="area-tag info">講習会</span>
                                    <?php elseif (has_term('syogai', 'info_category', $post)): ?>
                                        <span class="area-tag info">生涯学習</span>
                                    <?php elseif (has_term('association', 'info_category', $post)): ?>
                                        <span class="area-tag info">学会報告</span>
                                    <?php elseif (has_term('sapporo', 'classroom_category', $post)): ?>
                                        <span class="area-tag sapporo">札幌教室</span>
                                    <?php elseif (has_term('sendai', 'classroom_category', $post)): ?>
                                        <span class="area-tag sendai">仙台教室</span>
                                    <?php elseif (has_term('ichigaya', 'classroom_category', $post)): ?>
                                        <span class="area-tag ichigaya">市ヶ谷教室</span>
                                    <?php elseif (has_term('kawagoe', 'classroom_category', $post)): ?>
                                        <span class="area-tag kawagoe">医学アカデミー川越校</span>
                                    <?php elseif (has_term('hiroshima', 'classroom_category', $post)): ?>
                                        <span class="area-tag hiroshima">広島教室</span>
                                    <?php elseif (has_term('shinjuku', 'classroom_category', $post)): ?>
                                        <span class="area-tag shinjyuku">新宿教室</span>
                                    <?php elseif (has_term('yokohama', 'classroom_category', $post)): ?>
                                        <span class="area-tag yokohama">横浜教室</span>
                                    <?php elseif (has_term('ikebukuro', 'classroom_category', $post)): ?>
                                        <span class="area-tag ikebukuro">池袋教室</span>
                                    <?php elseif (has_term('tsudanuma', 'classroom_category', $post)): ?>
                                        <span class="area-tag tsudanuma">津田沼教室</span>
                                    <?php elseif (has_term('remedial', 'classroom_category', $post)): ?>
                                        <span class="area-tag remedial">基礎教育支援室</span>
                                    <?php elseif (has_term('live', 'classroom_category', $post)): ?>
                                        <span class="area-tag net">ライブ配信</span>
                                    <?php elseif (has_term('online', 'classroom_category', $post)): ?>
                                        <span class="area-tag net">オンデマンド教室</span>
                                    <?php elseif (has_term('nagoya', 'classroom_category', $post)): ?>
                                        <span class="area-tag nagoya">名古屋教室</span>
                                    <?php elseif (has_term('osaka', 'classroom_category', $post)): ?>
                                        <span class="area-tag osaka">大阪教室</span>
                                    <?php elseif (has_term('umeda', 'classroom_category', $post)): ?>
                                        <span class="area-tag umeda">梅田教室</span>
                                    <?php elseif (has_term('kobe', 'classroom_category', $post)): ?>
                                        <span class="area-tag kobe">神戸教室</span>
                                    <?php elseif (has_term('kanazawa', 'classroom_category', $post)): ?>
                                        <span class="area-tag kanazawa">金沢教室</span>
                                    <?php elseif (has_term('fukuoka', 'classroom_category', $post)): ?>
                                        <span class="area-tag fukuoka">福岡教室</span>
                                    <?php elseif (has_term('corona', 'info_category', $post)): ?>
                                        <span class="area-tag info">コロナ関連</span>
                                    <?php endif; ?>
                                    <time datetime="<?php the_time(__('Y-m-d')) ?>"><?php the_time(__('Y.m.d')) ?></time>
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