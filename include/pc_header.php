<header class="hideSP">

    <div class="header-wrapper">

        <div class="logo-box">
            <p class="logo"><a href="<?php echo esc_url(home_url('/')); ?>">
                    <svg class="logo-yakuzemi">
                        <use xlink:href="#logo-yakuzemi"/>
                    </svg>
                </a></p>
            <h1 class="site-title"><?php bloginfo('description'); ?></h1>
        </div>

        <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
            <div class="search-form">
                <input type="text" value="" name="s" id="s"/>
                <input type="submit" id="searchsubmit" value=""/>
            </div>
        </form>

        <div class="contact-box">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i>TOP</a></li>
                <li><a href="https://www.mypage.yakuzemi.ac.jp/login/" target="_blank"><i class="fas fa-book"></i>受講申込み（マイページ）</a>
                </li>
                <li><a href="https://yakuzemi.study.jp/rpv/" target="_blank"><i class="fas fa-book"></i>オンライン教室ログイン</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>contact/"><i class="fas fa-envelope"></i>お問合せ・FAQ</a>
                </li>
                <li><a href="https://ph-port.jp/" target="_blank"><i class="fas fa-user"></i>薬剤師の方</a></li>
            </ul>
        </div>

    </div><!-- header-wrapper -->

</header>

<div class="nav-bg hideSP">
    <nav>
        <ul class="menu">
            <li class="menu__multi">
                <a href="#"<?php if (is_singular('courses-2025')): ?> class="current"<?php endif; ?>>コース案内</a>
                <ul class="menu__second-level">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>point">私たちの特徴</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2026">既卒生コース</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>loan">料金・割引・お支払い</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>benefit">申込み・特典</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>passing">卒業生の声</a></li>
                    <li><a href="https://www2.yakuzemi.ac.jp/contents/pamphlet/yakuzemi2026/"
                           target="_blank">学校案内パンフレット</a></li>
                </ul>
            </li>

            <li class="menu__multi">
                <a href="#"<?php if (is_singular('seminar')): ?> class="current"<?php endif; ?>>講習会・模試</a>
                <!-- 教室で探す -->
                <ul class="menu__second-level">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>exams">模擬試験</a></li>
                    <li><a href="https://capsule.yakuzemi.ac.jp/seminar" target="_blank">講習会情報(Capsule)</a></li>
                </ul>
            </li>

            <li class="menu__multi">
                <a href="#"<?php if (is_singular('instructors-list')): ?> class="current"<?php endif; ?>>教室・講師紹介</a>
                <ul class="menu__second-level">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>classroom-maps/">全国の教室一覧</a></li>
                    <li>
                        <!-- 第2階層 -->
                        <a href="#" class="init-right">北海道・東北</a>
                        <ul class="menu__third-level">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/sapporo">札幌教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/sendai">仙台教室</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="init-right">関東</a>
                        <ul class="menu__third-level">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/tsudanuma">津田沼教室</a></li>
                            <li><a href="https://igakuacademy.ac.jp/ph/" rel="noopener" target="_blank">医学アカデミー川越校</a>
                            </li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/ikebukuro">池袋教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/shinjyuku">新宿教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/ichigaya">市ヶ谷教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/yokohama">横浜教室</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="init-right">東海</a>
                        <ul class="menu__third-level">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/nagoya">名古屋教室</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="init-right">関西</a>
                        <ul class="menu__third-level">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/osaka">大阪教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/kobe">神戸教室</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="init-right">中国・四国</a>
                        <ul class="menu__third-level">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/hiroshima">広島教室</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="init-right">九州</a>
                        <ul class="menu__third-level">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/fukuoka">福岡教室</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="init-right">ネット</a>
                        <ul class="menu__third-level">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/live">ライブ配信教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/online">オンデマンド教室</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/metaverse">メタバース教室</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>classroom/support">サポート</a></li>
                </ul>
            </li>

            <li class="menu__multi">
                <a href="#"<?php if (is_page(array('remedial_omoi', 'reme_contents', 'ph_data', 'butsuri-matsubara', 'butsuri-kamiaka', 'kagaku-tanaka', 'seibutsu-sumi', 'remedial', 'kobetsu-koushi', 'kobetsu_contact', 'kobetsu_voice'))): ?> class="current"<?php endif; ?>>個別指導</a>
                <ul class="menu__second-level">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>remedial">薬ゼミの個別指導</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>remedial-faq">よくある質問</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>kobetsu_contact">お問い合わせ</a></li>
                </ul>
            </li>

            <li class="menu__multi">
                <a href="#"<?php if (is_page('online')): ?> class="current"<?php endif; ?>>オンライン教室</a>
                <ul class="menu__second-level">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>online" rel="noopener"
                           target="_blank">オンライン教室について</a></li>
                    <li><a href="https://yakuzemi.study.jp/rpv/" target="_blank">オンライン教室にログインする</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>faq_online">オンライン教室よくある質問</a></li>
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
                <a href="#"<?php if (is_singular('tools')): ?> class="current"<?php endif; ?>>書籍案内</a>
                <!-- 第2階層 -->
                <ul class="menu__second-level">
                    <li>
                        <a href="#" class="init-right">教材一覧</a>
                        <!-- 第3階層 -->
                        <ul class="menu__third-level_right">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>reference">国試対策参考書・問題集</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>cbt">CBT・OSCE対策・低学年次向け</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>other">実務実習・高学年次向け</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>booksPharm">薬学生・薬剤師向け</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>booksPharmacy">病院薬剤部・薬局向け</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>shougaibooks">薬剤師向け（生涯学習）</a></li>
                        </ul>
                    </li><!-- 教材一覧 -->
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>buy">ご購入はこちら</a>
                    </li><!-- 教材一覧 -->
                    <li><a href="<?php echo esc_url(home_url('/')); ?>textbook_correction/">追補・書籍訂正情報</a></li>
                </ul><!-- menu__second-level -->
            </li>

            <li class="menu__multi">
                <a href="#"<?php if (is_singular('mission')): ?> class="current"<?php endif; ?>>学校・採用情報</a>
                <ul class="menu__second-level">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>message">学長挨拶</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>thought">薬ゼミの思い</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>family-support">ご家族向けサポート</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>pharmacy">薬ゼミの薬局</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>sdgs">薬ゼミ×SDGs</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>globalchallenge">薬ゼミ 国際事業への思い</a></li>
                    <!-- 採用情報 -->
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>candidate">講師採用</a>
                    </li>
                    <!-- 採用情報 -->
                </ul>
            </li>

        </ul>
    </nav>
</div><!-- nav-bg -->
