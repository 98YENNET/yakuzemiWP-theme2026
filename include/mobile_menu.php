<div class="mb-side-menu sb-slidebar sb-right">
    <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
        <div class="search-form mb20">
            <input type="text" value="" name="s" id="s" placeholder="サイト内検索"/>
            <input type="submit" id="searchsubmit" value=""/>
        </div>
    </form>

    <!-- クイックリンク（2列：左→右）アイコンはヘッダーのMY PAGE等と同テイスト -->
    <ul class="spMenuQuick">
        <li>
            <a href="https://www.mypage.yakuzemi.ac.jp/login/" target="_blank" rel="noopener">
                <svg class="spMenuQuick__icon" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1s3.1 1.39 3.1 3.1v2z"/>
                </svg>
                <span>受講申し込み<br>(マイページ)</span>
            </a>
        </li>
        <li>
            <a href="https://yakuzemi.study.jp/rpv/" target="_blank" rel="noopener">
                <svg class="spMenuQuick__icon" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z"/>
                </svg>
                <span>オンライン教室<br>ログイン</span>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/')); ?>contact/">
                <svg class="spMenuQuick__icon" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M11.07 12.85c.77-1.39 2.25-2.21 3.11-3.44.91-1.29.4-3.7-2.18-3.7-1.69 0-2.52 1.28-2.87 2.34L6.54 6.96C7.25 4.83 9.18 3 11.99 3c2.35 0 3.96 1.07 4.78 2.41.7 1.15 1.11 3.3.03 4.9-1.2 1.77-2.35 2.31-2.97 3.45-.25.46-.35.76-.35 2.24h-2.89c-.01-.78-.13-2.05.48-3.15zM14 20c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2z"/>
                </svg>
                <span>問い合わせ・FAQ</span>
            </a>
        </li>
        <li>
            <a href="https://ph-port.jp/" target="_blank" rel="noopener">
                <svg class="spMenuQuick__icon" viewBox="0 -960 960 960" aria-hidden="true">
                    <!-- 左下側の半分を白で塗りつぶし。枠との継ぎ目を消すため同色ストロークで外側へ約0.5px拡張 -->
                    <path d="M345-200q29 0 56-11t47-31l106-107-205-205-107 106q-20 20-31 47t-11 56q0 60 42.5 102.5T345-200Z" fill="#ffffff" stroke="#ffffff" stroke-width="68" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" d="M345-120q-94 0-159.5-65.5T120-345q0-45 17-86t49-73l270-270q32-32 73-49t86-17q94 0 159.5 65.5T840-615q0 45-17 86t-49 73L504-186q-32 32-73 49t-86 17ZM718-512q20-20 31-47t11-56q0-60-42.5-102.5T615-760q-29 0-56 11t-47 31L406-611L242-448q-20 20-31 47t-11 56q0 60 42.5 102.5T345-200q29 0 56-11t47-31l106-107L718-512Z"/>
                </svg>
                <span>薬剤師の方</span>
            </a>
        </li>
    </ul>

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
                    <li><a href="https://capsule.yakuzemi.ac.jp/seminar" target="_blank">講習会情報(Capsule)</a></li>
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
                            <li><a href="https://igakuacademy.ac.jp/ph/" target="_blank">医学アカデミー市ヶ谷校</a></li>
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