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

                <section class="info-area mb50">
                    <h1>
                        <svg class="icon icon_pencil">
                            <use xlink:href="#icon_pencil"/>
                        </svg>
                        講習会情報<span><a href="<?php echo esc_url(home_url('/')); ?>seminar" class="all-list"><svg
                                        class="icon_list"><use xlink:href="#icon_list"/></svg>一覧</a></span></h1>
                    <div class="referenceWerapper">
                        <?php get_template_part('include/reference'); ?>
                    </div>
                </section><!-- info-area -->
                <!-- <section class="info-area mb50" id="lectureWrapper">
	<div class="news-area">
		<ul class="news mb30">
			<?php //講習会情報
                $seminarCategories = array(
                        "seminar_sapporo",
                        "seminar_sendai",
                        "seminar_tsudanuma",
                        "seminar_kawagoe",
                        "seminar_ikebukuro",
                        "seminar_shinjuku",
                        "seminar_remedial",
                        "seminar_ichigaya",
                        "seminar_yokohama",
                        "seminar_nagoya",
                        "seminar_osaka",
                        "seminar_kobe",
                        "seminar_hiroshima",
                        "seminar_fukuoka",
                        "seminar_live",
                        "seminar_online",
                        "seminar_metaverse"
                );
                $seminarCategoryNames = array(
                        "札幌教室",
                        "仙台教室",
                        "津田沼教室",
                        "医学アカデミー川越校",
                        "池袋教室",
                        "新宿教室",
                        "基礎教育支援室",
                        "市ヶ谷教室",
                        "横浜教室",
                        "名古屋教室",
                        "大阪教室",
                        "神戸教室",
                        "広島教室",
                        "福岡教室",
                        "ライブ配信",
                        "オンデマンド教室",
                        "メタバース教室"
                );

                foreach ($seminarCategories as $sck => $seminarCategory) {
                    $currnet_date = date_i18n('y/m/d');
                    $loop = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'orderby' => 'date',
                            'category_name' => $seminarCategory,
                            'order' => 'DESC',
                    ));
                    if ($loop->have_posts()) : while ($loop->have_posts()): $loop->the_post();
                        ?>
			<li>
				<div class="flt-L mb_mb5">
					<span class="area-tag <?php echo str_replace('seminar_', '', $seminarCategory); ?>"><?php echo $seminarCategoryNames[$sck]; ?></span>
					<time datetime="<?php the_field('実施日') ?>"><?php $date = date_create('' . get_field('実施日') . '');
                        echo date_format($date, 'Y.m.d'); ?> <?php the_field('開始実施選択'); ?></time>
				</div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li>
			<?php endwhile; endif;
                    wp_reset_postdata(); ?>

			<?php
                } //foreach($seminarCategories as $sck => $seminarCategory){
                ?>
		</ul>
	</div><!-- news-area -->
                </section --><!-- info-area -->


                <div class="distinction-area-wrapper">
                    <div class="distinction-area">

                        <h1>
                            <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/themes/yakuzemi/images/top-message.png"
                                 alt="薬学ゼミナールで勉強すれば国試がみえる！" class="mt50 mb30"></h1>
                        <div class="clearfix">
                            <div class="distinction-area-content da01">
                                <h1><font size="5">合格に導くカリキュラム</font></h1>
                                <div class="badge-wrapper">
                                </div>
                                <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/themes/yakuzemi/images/top-img01.jpg"
                                     alt="合格に導くカリキュラム" class="mb10">
                                <p class="pickup-area-title">
                                    自己学習では点数アップしにくい範囲を補強するのが薬ゼミの強みです。
                                    そのために、講義計画、テキスト等は毎年作り上げ改善をしています。
                                    <br/><a href="<?php echo esc_url(home_url('/')); ?>curriculum">［詳細はこちら］</a>
                                </p>
                            </div>


                            <div class="distinction-area-content da02">
                                <h1><font size="5">学生思いの講師陣</font></h1>
                                <div class="badge-wrapper">
                                    <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/themes/yakuzemi/images/top/feature02.jpg"
                                         alt="学生思いの個性あふれる講師陣" class="mb10">
                                </div>
                                <p class="pickup-area-title">
                                    全国170人以上の熱意溢れる講師陣が、あなたの夢を叶えるために徹底的にサポートします。
                                    <br/><a href="<?php echo esc_url(home_url('/')); ?>feature">［詳細はこちら］</a>
                                </p>
                            </div>
                        </div>

                        <div class="clearfix">
                            <section class="distinction-area-content da03">
                                <h1><font size="5">全国に15教室</font></h1>
                                <div class="badge-wrapper">
                                    <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/themes/yakuzemi/images/top-img03.jpg"
                                         alt="全国に15教室" class="mb10">
                                    <p class="pickup-area-title">
                                        各教室には科目専任講師を配置。薬学生に寄り添い、合格へ導きます。
                                        <br/><a href="<?php echo esc_url(home_url('/')); ?>classroom-maps/">［詳細はこちら］</a>
                                    </p>
                                </div>
                            </section>

                            <section class="distinction-area-content da04">
                                <h1><font size="5">国試を完全網羅 「青本」</font></h1>
                                <div class="badge-wrapper">
                                    <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/themes/yakuzemi/images/top/feature04.jpg"
                                         alt="新出題基準完全対応の「新｣青本" class="mb5">
                                </div>
                                <p class="pickup-area-title">
                                    国家試験の傾向を踏まえて毎年改訂。最新情報は青本で学びます。
                                    <br/><a href="<?php echo esc_url(home_url('/')); ?>reference">［詳細はこちら］</a>
                                </p>
                            </section>
                        </div>

                        <div class="clearfix">
                            <section class="distinction-area-content da05">
                                <h1><font size="5">国試を徹底分析　模擬試験</font></h1>
                                <div class="badge-wrapper">
                                    <img src="<?php echo esc_url(home_url('/')); ?>yz/wp-content/uploads/top_img05.jpg"
                                         alt="業界No.1の受験率" class="mb10">
                                </div>
                                <p class="pickup-area-title">
                                    年間のべ30,000名以上の受験者数。国試を徹底分析した予想問題で毎年多数的中！
                                    <br/><a href="<?php echo esc_url(home_url('/')); ?>exams">［詳細はこちら］</a>
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