<div class="mb-side-menu sb-slidebar sb-right">
    <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
        <div class="search-form mb20">
            <input type="text" value="" name="s" id="s"/>
            <input type="submit" id="searchsubmit" value=""/>
        </div>
    </form>

    <nav>
        <ul id="accordion_box">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">トップページ</a></li>

            <li class="main_trigger">
                <a>コース案内<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <!-- 第2階層 -->
                <ul class="second_list">
                    <li class="main_trigger">
                        <a>私たちの特徴<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <!-- 第3階層 -->
                        <ul class="third_list">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>point">私たちの特徴</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>feature">学生思いの講師陣</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>support">安心の充実サポート</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>curriculum">カリキュラム</a></li>
                        </ul>
                    </li>
                    <li class="main_trigger">
                        <a>既卒生コース<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <!-- 第3階層 -->
                        <ul class="third_list">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2026">既卒生コース</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>tsugaku">通学</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>syouninzu">少人数</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>live">ライブ配信</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>passing">卒業生の声</a></li>
                        </ul>
                    </li>
                    <li class="main_trigger">
                        <a>料金・割引・お支払い<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <!-- 第3階層 -->
                        <ul class="third_list">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>loan">料金・割引・お支払い</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>simulator2026">受講料シミュレータ</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>benefit">申込み・特典</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>faq">よくある質問</a></li>
                    <li><a href="https://www2.yakuzemi.ac.jp/contents/pamphlet/yakuzemi2026/"
                           target="_blank">デジタルパンフレット</a></li>
                </ul>
            </li>

            <li class="main_trigger">
                <a>講習会情報<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <!-- 第2階層 -->
                <ul class="second_list">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>exams">模擬試験</a></li>
                    <li class="main_trigger">
                        <a>教室で探す<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <!-- 第3階層 -->
                        <ul class="third_list">
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_sapporo">札幌教室（<?php $cat = get_category_by_slug('seminar_sapporo');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_sendai">仙台教室（<?php $cat = get_category_by_slug('seminar_sendai');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_tsudanuma">津田沼教室（<?php $cat = get_category_by_slug('seminar_tsudanuma');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_kawagoe">医学アカデミー川越校（<?php $cat = get_category_by_slug('seminar_kawagoe');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_ikebukuro">池袋教室（<?php $cat = get_category_by_slug('seminar_ikebukuro');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_shinjuku">新宿教室（<?php $cat = get_category_by_slug('seminar_shinjuku');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_ichigaya">市ヶ谷教室（<?php $cat = get_category_by_slug('seminar_ichigaya');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_yokohama">横浜教室（<?php $cat = get_category_by_slug('seminar_yokohama');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_nagoya">名古屋教室（<?php $cat = get_category_by_slug('seminar_nagoya');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_osaka">大阪教室（<?php $cat = get_category_by_slug('seminar_osaka');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_kobe">神戸教室（<?php $cat = get_category_by_slug('seminar_kobe');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_hiroshima">広島教室（<?php $cat = get_category_by_slug('seminar_hiroshima');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_fukuoka">福岡教室（<?php $cat = get_category_by_slug('seminar_fukuoka');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_shibuya">ライブ配信（<?php $cat = get_category_by_slug('seminar_live');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_online">オンデマンド教室（<?php $cat = get_category_by_slug('seminar_online');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_metaverse">メタバース教室（<?php $cat = get_category_by_slug('seminar_metaverse');
                                    echo $cat->count; ?>）</a></li>
                        </ul>
                    </li>
                    <!-- 第2階層 -->
                    <li class="main_trigger">
                        <a>地域で探す<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <!-- 第3階層 -->
                        <ul class="third_list">
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/hokkaido_tohoku-area">北海道・東北（<?php $cat = get_category_by_slug('hokkaido_tohoku-area');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/kanto-area">関東（<?php $cat = get_category_by_slug('kanto-area');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/tokai-area">東海（<?php $cat = get_category_by_slug('tokai-area');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/kansai-area">関西（<?php $cat = get_category_by_slug('kansai-area');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/	chu_shikoku-area">中国・四国（<?php $cat = get_category_by_slug('chu_shikoku-area');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/kyushu-area">九州（<?php $cat = get_category_by_slug('kyushu-area');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/net-area">ネット（<?php $cat = get_category_by_slug('net-area');
                                    echo $cat->count; ?>）</a></li>
                        </ul>
                    </li>
                    <li class="main_trigger">
                        <a>対象者から探す<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <!-- 第3階層 -->
                        <ul class="menu__third-level">
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/other_students">既卒生対象（<?php $cat = get_category_by_slug('other_students');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/6years_students">6年生対象（<?php $cat = get_category_by_slug('6years_students');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/5years_students">5年生対象（<?php $cat = get_category_by_slug('5years_students');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/4years_students">4年生対象（<?php $cat = get_category_by_slug('4years_students');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/3years_students">3年生対象（<?php $cat = get_category_by_slug('3years_students');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/2years_students">2年生対象（<?php $cat = get_category_by_slug('2years_students');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/1years_students">1年生対象（<?php $cat = get_category_by_slug('1years_students');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/0years_students">入学前対象（<?php $cat = get_category_by_slug('1years_students');
                                    echo $cat->count; ?>）</a></li>
                        </ul>
                    </li>
                    <li class="main_trigger">
                        <a>日程から探す<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <!-- 第3階層 -->
                        <ul class="third_list">
                            <?php $string = wp_list_categories(array('title_li' => '', 'taxonomy' => 'seminar_month', 'show_count' => 1, 'echo' => 0));
                            $string = preg_replace('/<\/a> (\([0-9]*\))/', ' $1</a>', $string);
                            echo $string; ?>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="main_trigger">
                <a>教室・講師紹介<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <!-- 第2階層 -->
                <ul class="second_list">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>classroom-maps/">全国の教室一覧</a></li>
                    <li class="main_trigger">
                        <a>北海道・東北<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="third_list">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/sapporo">札幌教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/sendai">仙台教室</a></li>
                        </ul>
                    </li>
                    <li class="main_trigger">
                        <a>関東<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="third_list">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/tsudanuma">津田沼教室</a></li>
                            <li><a href="https://igakuacademy.ac.jp/ph/" target="_blank">医学アカデミー川越校</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/ikebukuro">池袋教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/shinjyuku">新宿教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/ichigaya">市ヶ谷教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/yokohama">横浜教室</a></li>
                        </ul>
                    </li>
                    <li class="main_trigger">
                        <a>東海<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="third_list">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/nagoya">名古屋教室</a></li>
                        </ul>
                    </li>
                    <li class="main_trigger">
                        <a>関西<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="third_list">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/osaka">大阪教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/kobe">神戸教室</a></li>
                        </ul>
                    </li>
                    <li class="main_trigger">
                        <a>中・四国<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="third_list">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/hiroshima">広島教室</a></li>
                        </ul>
                    </li>
                    <li class="main_trigger">
                        <a>九州<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="third_list">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/fukuoka">福岡教室</a></li>
                        </ul>
                    </li>
                    <li class="main_trigger">
                        <a>ネット<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="third_list">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/live">ライブ配信教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/online">オンデマンド教室</a>
                            </li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/metaverse">メタバース教室</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/support">サポート</a></li>
                </ul><!-- second_list -->
            </li><!-- main_trigger -->

            <li class="main_trigger">
                <a>個別指導<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="second_list">
                    <!-- 個別指導について -->
                    <li class="main_trigger">
                        <a>個別指導<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>remedial">薬ゼミの個別指導</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>kobetsu-koushi">こんな講師が教えています</a>
                            </li>

                        </ul>
                    </li>
                    <!-- 個別指導について -->

                    <li><a href="<?php echo esc_url(home_url('/')); ?>remedial-faq">よくある質問</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>kobetsu_contact">お問い合わせ</a></li>
                </ul><!-- second_list -->
            </li><!-- main_trigger -->

            <li class="main_trigger">
                <a>オンライン教室<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="second_list">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>online">オンライン教室について</a></li>
                    <li><a href="https://yakuzemi.study.jp/rpv/" target="_blank">オンライン教室にログインする</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>faq_online">よくある質問</a></li>
                </ul><!-- second_list -->
            </li><!-- main_trigger -->

            <li class="main_trigger">
                <a>国家試験情報<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <!-- 第2階層 -->
                <ul class="second_list">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>info_category/country-exam">国家試験情報一覧</a>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>jikosaiten">自己採点システム</a></li>
                </ul><!-- second_list -->
            </li><!-- main_trigger -->

            <li class="main_trigger">
                <a>書籍案内<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <!-- 第2階層 -->
                <ul class="second_list">
                    <li class="main_trigger">
                        <a>教材一覧</a>
                        <!-- 第3階層 -->
                        <ul class="third_list">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>reference">国試対策参考書・問題集</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>cbt">CBT対策・低学年次向け</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>other">実務実習・高学年次向け</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>booksPharm">薬学生・薬剤師向け</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>booksPharmacy">病院薬剤部・薬局向け</a>
                            </li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>booksBooklet">薬ゼミブックレット</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>shougaibooks">生涯学習テキスト</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>buy">ご購入はこちら</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>textbook_correction/">追補・書籍訂正情報</a></li>
                </ul>
            </li>

            <li class="main_trigger">
                <a>学校情報<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="second_list">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>message">学長挨拶</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>thought">薬ゼミの思い</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>family-support">ご家族向けサポート</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>pharmacy">薬ゼミの薬局</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>sdgs">薬ゼミ×SDGs</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>globalchallenge">薬ゼミ 国際事業への思い</a></li>
                </ul>
            </li>

            <li class="main_trigger">
                <a>講師採用<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="second_list">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>candidate">講師採用</a></li>
                    <!-- VOICE -->
                    <li class="main_trigger">
                        <a>講師の声<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>voice_001">VOICE 001 松本賢</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>voice_002">VOICE 002 宮崎元</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>voice_003">VOICE 003 伊藤真人</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>voice_004">VOICE 004 髙西ひかり</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>voice_005">VOICE 005 小林あつみ</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>voice_006">VOICE 006 真柄詩織</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>voice_007">VOICE 007 宮島彩</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>voice_008">VOICE 008 中村裕士</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>voice_009">VOICE 009 石塚博康</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>voice_010">VOICE 010 鬼倉佑季</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>voice_011">VOICE 011 光増雄太</a></li>
                        </ul>
                    </li>
                    <!-- VOICE -->
                </ul>
            </li>
            <li><a href="https://www.yakuzemi-shougai.jp/" target="_blank" rel="noopener">薬剤師生涯学習</a></li>
            <li><a href="https://igakuacademy.ac.jp/privacy/" target="_blank" rel="noopener">個人情報保護方針</a></li>

        </ul>
        <section class="sns-box">
            <ul class="sns_button">
                <li><a href="https://liff.line.me/1656872021-gB4GGQbK/b8fd2d84af6c4729bcd0743e7e4565e0" target="_blank"
                       rel="noopener noreferrer"><i class="fab fa-line"></i></a></li>
                <li><a href="https://www.facebook.com/yakuzemi/" target="_blank" rel="noopener noreferrer"><i
                                class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.yakuzemi.ac.jp/information/sns/#instagram" target="_blank"
                       rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.yakuzemi.ac.jp/information/sns/#tw" target="_blank"
                       rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCXhjEGKFsrmXm-oUvlGTftA" target="_blank"
                       rel="noopener noreferrer"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </section>
        <!-- accordion_box -->
    </nav>
</div><!-- nav-bg -->