<?php get_header(); ?>

    <div class="top-img mb30">
        <?php masterslider(1); ?>
    </div>

    <div class="contents-wrapper">
        <div class="contents">

            <div class="left-contents">

                <section class="info-area mb50">
                    <h1>
                        <svg class="icon icon_megaphone">
                            <use xlink:href="#icon_megaphone"/>
                        </svg>
                        薬ゼミからのお知らせ<span><a href="<?php echo esc_url(home_url('/')); ?>information"
                                                     class="all-list"><svg class="icon_list"><use
                                            xlink:href="#icon_list"/></svg>一覧</a></span></h1>
                    <div class="news-area">

                        <ul class="news">
                            <?php //お知らせ
                            $loop = new WP_Query(array(
                                    "post_type" => "information",
                                    'posts_per_page' => 3,
                            ));
                            if ($loop->have_posts()) : while ($loop->have_posts()): $loop->the_post();
                                ?>
                                <li>
                                    <div class="flt-L mb_mb5">
                                        <?php get_template_part('include/class_category_label'); ?>
                                        <time datetime="<?php the_time(__('Y-m-d')) ?>"><?php the_time(__('Y.m.d')) ?></time>
                                    </div>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>
                            <?php endwhile; endif;
                            wp_reset_postdata(); ?>
                        </ul>

                    </div><!-- news-area -->
                </section><!-- info-area -->


                <div class="distinction-area-wrapper">
                    <div class="distinction-area">

                        <h1>
                            <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/themes/yakuzemi/images/top-message_v2.png?v2"
                                 alt="合格はあなたの中にある" class="mt50 mb30"></h1>
                        <div class="clearfix">
                            <div class="distinction-area-content da01">
                                <h1><font size="5">不安に寄り添う学び</font></h1>
                                <div class="badge-wrapper">
                                </div>
                                <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/themes/yakuzemi/images/top-img01.jpg"
                                     alt="不安に寄り添う学び" class="mb10">
                                <p class="pickup-area-title">
                                    ひとりでは不安な国試対策を、毎年進化する復習設計と丁寧な弱点分析で支え、着実に合格へ導く学び
                                    <br/><a href="<?php echo esc_url(home_url('/')); ?>curriculum">［詳細を見る］</a>
                                </p>
                            </div>

                            <div class="distinction-area-content da02">
                                <h1><font size="5">再挑戦を支える講師</font></h1>
                                <div class="badge-wrapper">
                                    <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/themes/yakuzemi/images/top/feature02.jpg"
                                         alt="再挑戦を支える講師" class="mb10">
                                </div>
                                <p class="pickup-area-title">
                                    つまずいた範囲も一人で抱えない。講師の徹底サポートと確かな教材で、不安を希望に変えながら再挑戦を支えます。
                                    <br/><a href="<?php echo esc_url(home_url('/')); ?>feature">［詳細を見る］</a>
                                </p>
                            </div>
                        </div>

                        <div class="clearfix">
                            <section class="distinction-area-content da03">
                                <h1><font size="5">共に歩む教室</font></h1>
                                <div class="badge-wrapper">
                                    <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/themes/yakuzemi/images/top-img03.jpg"
                                         alt="共に歩む教室" class="mb10">
                                    <p class="pickup-area-title">
                                        全国15教室とオンラインが、あなたと共に歩みます。迷った時も寄り添い、あなたが確実に前へ進める環境を整えています。
                                        <br/><a href="<?php echo esc_url(home_url('/')); ?>classroom-maps/">［詳細を見る］</a>
                                    </p>
                                </div>
                            </section>

                            <section class="distinction-area-content da04">
                                <h1><font size="5">9割が選ぶ青本</font></h1>
                                <div class="badge-wrapper">
                                    <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/themes/yakuzemi/images/top/feature04_v2.jpg"
                                         alt="9割が選ぶ青本" class="mb5">
                                </div>
                                <p class="pickup-area-title">
                                    薬学生の9割が使う青本は、最新傾向を毎年更新し実績も豊富。確かなデータと分析で、不合格からの再挑戦を堅実に支えます。
                                    <br/><a href="<?php echo esc_url(home_url('/')); ?>reference">［詳細を見る］</a>
                                </p>
                            </section>
                        </div>

                        <div class="clearfix">
                            <section class="distinction-area-content da05">
                                <h1><font size="5">12,000人の指標</font></h1>
                                <div class="badge-wrapper">
                                    <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/uploads/top_img05.jpg"
                                         alt="12,000人の指標" class="mb10">
                                </div>
                                <p class="pickup-area-title">
                                    12,000人以上の受験データと詳細カルテで弱点を正確に把握。的中実績の高い模試が、あなたの学習を確かな数値で支えます。
                                    <br/><a href="<?php echo esc_url(home_url('/')); ?>exams">［詳細を見る］</a>
                                </p>
                            </section>
                        </div>
                    </div><!-- distinction-area -->
                </div><!-- distinction-area-wrapper -->
                <div style="padding:1em;background-color:#fff;">
                    <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/themes/yakuzemi/images/top/voice-midashi.jpg"
                         alt="合格者の声">
                </div>
                <div style="padding:1em;background-color:#fff;display:flex;" class="hideSP">
                    <iframe width="50%" height="315" src="https://www.youtube.com/embed/V9mYYnA1jb8?si=GDKG2SBBxpGdqX26"
                            title="薬学ゼミナール" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <iframe width="50%" height="315" src="https://www.youtube.com/embed/kjht21OX5W8?si=m0vlV5DreHms3QJq"
                            title="薬学ゼミナール" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div style="padding:1em;background-color:#fff;" class="hidePC">
                    <iframe width="100%" height="200"
                            src="https://www.youtube.com/embed/V9mYYnA1jb8?si=GDKG2SBBxpGdqX26" title="薬学ゼミナール"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <iframe width="100%" height="200"
                            src="https://www.youtube.com/embed/kjht21OX5W8?si=m0vlV5DreHms3QJq" title="薬学ゼミナール"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>


            </div><!-- left-contents -->

            <?php get_sidebar(); ?>

        </div><!-- contents -->
    </div><!-- contents-wrapper -->

<?php get_footer(); ?>