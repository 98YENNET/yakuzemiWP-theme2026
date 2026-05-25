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
                        "seminar_online"
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
                        "オンデマンド教室"
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

                        <h1><img src="<?php echo get_template_directory_uri(); ?>/images/top-message.png"
                                 alt="薬学ゼミナールで勉強すれば国試がみえる！" class="mt50 mb30"></h1>
                        <div class="clearfix">
                            <div class="distinction-area-content da01">
                                <h1><a href="<?php echo esc_url(home_url('/')); ?>curriculum"><font size="5">合格に導く確かなカリキュラム</font>
                                </h1>
                                <div class="badge-wrapper">
                                    <!--<img src="http://www2.yakuzemi.ac.jp/yz/wp-content/uploads/104kaigokakusha-2.png" alt="国家試験合格者数　業界No.1" class="badge">-->
                                </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top-img01.jpg"
                                     alt="合格に導く確かなカリキュラム" class="mb10"></a>
                                <p class="pickup-area-title">
                                    国家試験が変化している中で、薬ゼミは毎年カリキュラムを改善しており、40年以上の歴史やノウハウに基づき絶対的な国試合格へ導きます!</p>
                            </div>

                            <div class="distinction-area-content da02">
                                <h1><a href="<?php echo esc_url(home_url('/')); ?>feature"><font
                                                size="5">学生思いの個性あふれる講師陣</font></h1>
                                <div class="badge-wrapper">
                                    <!--<img src="http://www2.yakuzemi.ac.jp/yz/wp-content/uploads/koshisuu.png" alt="専任講師数　業界NO.1" class="badge">-->
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/top-img02.jpg"
                                         alt="学生思いの個性あふれる講師陣" class="mb10"></a>
                                </div>
                                <p class="pickup-area-title">
                                    総勢150名以上の講師が全力でサポートします。講師のモットーは「学生思い」。あたたかさと厳しさを兼ね備えた講師陣がそばに寄り添い、明るい未来への道しるべとなります。</p>
                            </div>
                        </div>

                        <div class="clearfix">
                            <section class="distinction-area-content da03">
                                <h1><a href="https://www.yakuzemi.ac.jp/classroom-maps/"><font
                                                size="5">全国に15教室</font></h1>
                                <div class="badge-wrapper">
                                    <!--<img src="http://www2.yakuzemi.ac.jp/yz/wp-content/uploads/kyoshitsusuu.png" alt="教室数　業界NO.1" class="badge">-->
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/top-img03.jpg"
                                         alt="全国に15教室" class="mb10"></a>
                                    <p class="pickup-area-title">
                                        少しでもみなさんの近くでサポートしたい。各教室には科目専任講師を配置し、講義のほか質問対応・面談などのきめ細かいサポートをおこなっています。</p>
                                </div>
                            </section>

                            <section class="distinction-area-content da04">
                                <h1><a href="<?php echo esc_url(home_url('/')); ?>reference"><font size="5">新出題基準完全対応の「新｣青本</font>
                                </h1>
                                <div class="badge-wrapper">
                                    <!--<img src="http://www2.yakuzemi.ac.jp/yz/wp-content/uploads/shosekisaiyou.png" alt="書籍採用数　業界NO.1" class="badge">-->
                                </div>
                                <img src="http://www2.yakuzemi.ac.jp/yz/wp-content/uploads/top-aobon_2021.jpg"
                                     alt="新出題基準完全対応の「新｣青本" class="mb5"></a>
                                <p class="pickup-area-title">
                                    薬剤師国家試験受験生の95%が使用する国家試験対策の決定版。合格に必要な情報をすべて網羅。Webでの補足や実務とのリンクで複合問題対策も習得します。</p>
                            </section>
                        </div>
                        <div class="clearfix">
                            <section class="distinction-area-content da05">
                                <h1><a href="https://www.yakuzemi.ac.jp/exams/"><font size="5">業界No.1の受験率</font>
                                </h1>
                                <div class="badge-wrapper">
                                    <!--<img src="http://www2.yakuzemi.ac.jp/yz/wp-content/uploads/104kaigokakusha-2.png" alt="国家試験合格者数　業界NO.1" class="badge">-->
                                </div>
                                <img src="http://www2.yakuzemi.ac.jp/yz/wp-content/uploads/top_img05.jpg"
                                     alt="業界No.1の受験率" class="mb10"></a>
                                <p class="pickup-area-title">年間のべ30,000名以上の受験者数。完全オリジナルの国試を徹底分析した予想問題で毎年多数的中!
                                    40年以上国試を見続けてきたからこそ創り出せる問題で勉強の進捗確認と弱点克服が効率よくできます。</p>
                        </div>
                        </section>


                    </div><!-- distinction-area -->
                </div><!-- distinction-area-wrapper -->

            </div><!-- left-contents -->

            <?php get_sidebar(); ?>

        </div><!-- contents -->
    </div><!-- contents-wrapper -->

<?php get_footer(); ?>