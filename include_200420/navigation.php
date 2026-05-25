<div class="nav-bg">
    <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
    </button>

    <nav class="drawer-nav">
        <ul class="drawer-menu">
            <li class="drawer-dropdown">
                <a href="#"<?php if (is_singular('courses-2019')): ?> class="current"<?php endif; ?>>受講案内</a>
                <ul class="drawer-dropdown-menu">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2020">2020年度コース</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>voices">合格者の声</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>acomo">お住まいのご案内</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>loan">学費ローン</a></li>
                    <li><a href="http://www2.yakuzemi.ac.jp/yz/wp-content/uploads/yakuzemi2020.pdf" target="_blank">学校案内パンフレット</a>
                    </li>
                </ul>
            </li>

            <li class="menu__multi">
                <a href="#"<?php if (is_singular('seminar')): ?> class="current"<?php endif; ?>>講習会情報</a>
                <!-- 教室で探す -->
                <ul class="menu__second-level">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>#" class="init-right">教室で探す</a>
                        <ul class="menu__third-level">
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
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_kawagoe">川越教室（<?php $cat = get_category_by_slug('seminar_kawagoe');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_ikebukuro">池袋教室（<?php $cat = get_category_by_slug('seminar_ikebukuro');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_shinjuku">新宿教室（<?php $cat = get_category_by_slug('seminar_shinjuku');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_shibuya">渋谷リメディアル（<?php $cat = get_category_by_slug('seminar_shibuya');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_ochanomizu">お茶の水教室（<?php $cat = get_category_by_slug('seminar_ochanomizu');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_yokohama">横浜教室（<?php $cat = get_category_by_slug('seminar_yokohama');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_nagoya">名古屋教室（<?php $cat = get_category_by_slug('seminar_nagoya');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/seminar_kanazawa">金沢教室（<?php $cat = get_category_by_slug('seminar_kanazawa');
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
                        </ul>
                    </li>
                    <!-- 地域で探す -->
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>#" class="init-right">地域で探す</a>
                        <ul class="menu__third-level">
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
                                <a href="<?php echo esc_url(home_url('/')); ?>category/hokuriku-area">北陸（<?php $cat = get_category_by_slug('hokuriku-area');
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
                        </ul>
                    </li>
                    <!-- 対象者から探す -->
                    <li>
                        <a href="#" class="init-right">対象者から探す</a>
                        <ul class="menu__third-level">
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/6years_students">6年生対象（<?php $cat = get_category_by_slug('6years_students');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/4years_students">4・5年生対象（<?php $cat = get_category_by_slug('4years_students');
                                    echo $cat->count; ?>）</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>category/other_students">その他対象（<?php $cat = get_category_by_slug('other_students');
                                    echo $cat->count; ?>）</a></li>
                        </ul>
                    </li>
                    <!-- 日程から探す -->
                    <li>
                        <a href="#" class="init-right">日程から探す</a>
                        <ul class="menu__third-level">
                            <?php $string = wp_list_categories(array('title_li' => '', 'taxonomy' => 'seminar_month', 'show_count' => 1, 'echo' => 0));
                            $string = preg_replace('/<\/a> (\([0-9]*\))/', ' $1</a>', $string);
                            echo $string; ?>
                        </ul>
                    </li>
                </ul>

            <li class="menu__multi">
                <a href="#"<?php if (is_singular('instructors-list')): ?> class="current"<?php endif; ?>>教室・講師紹介</a>
                <ul class="menu__second-level">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>classroom-maps/">全国の教室一覧</a></li>
                    <li>
                        <!-- 第2階層 -->
                        <a href="#" class="init-right">北海道・東北</a>
                        <ul class="menu__third-level">
                            <li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/sapporo">札幌教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/sendai">仙台教室</a></li>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="init-right">関東</a>
                <ul class="menu__third-level">
                    <li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/tsudanuma">津田沼教室</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/kawagoe">川越教室</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>bay-laurel">川越学生寮</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/ikebukuro">池袋教室</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/shinjyuku">新宿教室</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/shibuya">渋谷リメディアル低学年室</a>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/ochanomizu">お茶の水教室</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/yokohama">横浜教室</a></li>
            </li>
        </ul>
        </li>
        <li>
            <a href="#" class="init-right">東海</a>
            <ul class="menu__third-level">
                <li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/nagoya">名古屋教室</a></li>
        </li>
        </ul>
        </li>
        <li>
            <a href="#" class="init-right">北陸</a>
            <ul class="menu__third-level">
                <li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/kanazawa">金沢教室</a></li>
        </li>
        </ul>
        </li>
        <li>
            <a href="#" class="init-right">関西</a>
            <ul class="menu__third-level">
                <li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/osaka">大阪教室</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/kobe">神戸教室</a></li>
        </li>
        </ul>
        </li>
        <li>
            <a href="#" class="init-right">中・四国</a>
            <ul class="menu__third-level">
                <li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/hiroshima">広島教室</a></li>
        </li>
        </ul>
        </li>
        <li>
            <a href="#" class="init-right">九州</a>
            <ul class="menu__third-level">
                <li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/fukuoka">福岡教室</a></li>
        </li>
        </ul>
        </li>
        </ul>
        </li>

        <li class="menu__multi">
            <a href="#"<?php if (is_page('online')): ?> class="current"<?php endif; ?>>オンライン教室</a>
            <ul class="menu__second-level">
                <li><a href="<?php echo esc_url(home_url('/')); ?>online">オンライン教室とは？</a></li>
                <li><a href="https://yakuzemi.study.jp/rpv/">オンライン教室ログイン</a></li>
                <li><a href="https://yakuzemi.study.jp/rpv/register.aspx">お試しライセンス登録</a></li>
            </ul>
        </li>

        <li class="menu__single">
            <a href="#"<?php if (is_singular('country-exam')): ?> class="current"<?php endif; ?>>国家試験情報</a>
            <ul class="menu__second-level">
                <li><a href="<?php echo esc_url(home_url('/')); ?>info_category/country-exam">国家試験情報一覧</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>jikosaiten">自己採点システム</a></li>
            </ul>
        </li>

        <li class="menu__multi">
            <a href="#"<?php if (is_page(array('exams', 'correction-exams'))): ?> class="current"<?php endif; ?>>各種試験情報</a>
            <ul class="menu__second-level">
                <li><a href="<?php echo esc_url(home_url('/')); ?>exams">模擬試験情報</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>correction-exams">模擬試験訂正・補足情報</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>cbt-exams">CBT模擬試験訂正・補足情報</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>kamoku-exams">科目別テスト訂正・補足情報</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>step-exams">ステップアップ模擬試験訂正・補足情報</a>
                </li>
            </ul>
        </li>

        <li class="menu__multi">
            <a href="#"<?php if (is_singular('tools')): ?> class="current"<?php endif; ?>>書籍案内</a>
            <!-- 第2階層 -->
            <ul class="menu__second-level">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>info_category/tools">新刊情報</a>
                </li><!-- 新刊情報 -->
                <li>
                    <a href="#" class="init-right">教材一覧</a>
                    <!-- 第3階層 -->
                    <ul class="menu__third-level_right">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>reference">国試対策参考書・問題集</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>cbt">CBT・OSCE対策・低学年次向け</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>other">実務実習・高学年次向け</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>booksPharm">薬学生・薬剤師向け</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>booksPharmacy">病院薬剤部・薬局向け</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>booksBooklet">薬ゼミブックレット</a></li>
                    </ul>
                </li><!-- 教材一覧 -->
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>buy">ご購入はこちら</a>
                </li><!-- 教材一覧 -->
                <li><a href="<?php echo esc_url(home_url('/')); ?>textbook_correction/">書籍訂正情報</a></li>
            </ul><!-- menu__second-level -->
        </li>

        <li class="menu__multi">
            <a href="#"<?php if (is_singular('mission')): ?> class="current"<?php endif; ?>>学校情報</a>
            <ul class="menu__second-level">
                <li><a href="<?php echo esc_url(home_url('/')); ?>message-2020">ごあいさつ</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>school-2020">薬ゼミについて</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>feature">薬ゼミ講師の特徴</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>pharmacy">薬ゼミの運営する薬局</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>csr">薬ゼミのCSR</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>about-mizuho">MIZUHOグループについて</a></li>
                <!-- 採用情報 -->
                <li>
                    <a href="#" class="init-right">採用情報</a>
                    <ul class="menu__third-level_right">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>candidate">求める人材</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>system">研修制度</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>internship">インターンシップ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>requirements">募集要項</a></li>
                        <!-- VOICE -->
                        <li>
                            <a href="#" class="init-right">講師の声</a>
                            <ul class="menu__third-level_right">
                                <li><a href="<?php echo esc_url(home_url('/')); ?>voice_001">VOICE 001 松本賢</a></li>
                                <li><a href="<?php echo esc_url(home_url('/')); ?>voice_002">VOICE 002 宮崎元</a></li>
                                <li><a href="<?php echo esc_url(home_url('/')); ?>voice_003">VOICE 003 伊藤真人</a></li>
                                <li><a href="<?php echo esc_url(home_url('/')); ?>voice_004">VOICE 004 髙西ひかり</a>
                                </li>
                                <li><a href="<?php echo esc_url(home_url('/')); ?>voice_005">VOICE 005 小林あつみ</a>
                                </li>
                                <li><a href="<?php echo esc_url(home_url('/')); ?>voice_006">VOICE 006 真柄詩織</a></li>
                                <li><a href="<?php echo esc_url(home_url('/')); ?>voice_007">VOICE 007 宮島彩</a></li>
                            </ul>
                        </li>
                        <!-- VOICE -->
                        <li><a href="<?php echo esc_url(home_url('/')); ?>session">説明会日程</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>entryform">エントリーフォーム</a></li>
                    </ul>
                </li>
                <!-- 採用情報 -->
            </ul>
        </li>

        </ul>
    </nav>
</div><!-- nav-bg -->
