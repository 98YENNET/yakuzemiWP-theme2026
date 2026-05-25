<div class="right-contents">

    <?php if (is_page('courses-2024') || get_post_type() == 'passingAAAA'): ?>
        <div class="side-menu">
            <h3 class="side_menu-title">受講案内</h3>
            <ul class="accordion">
                <li class="switch init-bottom current">2024年度コース</li>
                <ul class="side-sub-menu">
                    <li class="menu_title"><a href="">通学・寮・ライブ配信コース</a></li>
                    <li><a href="#zennichi_01"><i class="fas fa-angle-right"></i> &#9312;開講教室</a></li>
                    <li><a href="#zennichi_02"><i class="fas fa-angle-right"></i> &#9313;コースの内容</a></li>
                    <li><a href="#gakushu"> 学修サポート</a></li>
                    <li><a href="#career"> キャリアサポート</a></li>
                    <li><a href="#zennichi_03"><i class="fas fa-angle-right"></i> &#9314;料金表・割引</a></li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>simulator2024"<?php if (is_page('simulator2024')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>受講料シミュレータ</a>
                    </li>
                    <li><a href="#zennichi_04"><i class="fas fa-angle-right"></i> &#9315;スタートアッププログラム</a>
                    </li>
                    <li><a href="#zennichi_05"><i class="fas fa-angle-right"></i> &#9316;申込方法</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>passing">卒業生に聞いてみよう</a></li>
                </ul>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>exams"<?php if (is_page('exams')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>模擬試験</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>acomo" class="switch">お住まいのご案内</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>loan"<?php if (is_page('loan')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>学費サポート・教育ローン</a>
                </li>
                <li><a href="https://www.yakuzemi.ac.jp/information/parents110/" rel="noopener" target="_blank"
                       class="switch">保護者の皆さまへ</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>faq"<?php if (is_page('faq')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>よくある質問</a>
                </li>
                <li><a href="https://wp.yakuzemi.ac.jp/contents/pamphlet/yakuzemi2024/" target="_blank" class="switch">学校案内パンフレット</a>
                </li>
            </ul>
        </div><!-- side-menu -->


    <?php elseif (is_page('courses-2024') || get_post_type() == 'passing'): ?>
        <div class="side-menu">
            <h3 class="side_menu-title">受講案内</h3>
            <ul class="accordion">
                <li class="switch init-bottom current">2024年度コース</li>
                <ul class="side-sub-menu">
                    <li class="menu_title"><a href="">通学・寮・ライブ配信コース</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2024#zennichi_01"><i
                                    class="fas fa-angle-right"></i> &#9312;開講教室</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2024#zennichi_02"><i
                                    class="fas fa-angle-right"></i> &#9313;コースの内容</a></li>
                    <li><a href="#gakushu"> 学修サポート</a></li>
                    <li><a href="#career"> キャリアサポート</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2024#zennichi_03"><i
                                    class="fas fa-angle-right"></i> &#9314;料金表・割引</a></li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>simulator2024"<?php if (is_page('simulator2024')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>受講料シミュレータ</a>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2024#zennichi_04"><i
                                    class="fas fa-angle-right"></i> &#9315;スタートアッププログラム</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2024#zennichi_05"><i
                                    class="fas fa-angle-right"></i> &#9316;申込方法</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>passing">卒業生に聞いてみよう</a></li>
                </ul>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>exams"<?php if (is_page('exams')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>模擬試験</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>acomo" class="switch">お住まいのご案内</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>loan"<?php if (is_page('loan')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>学費サポート・教育ローン</a>
                </li>
                <li><a href="https://www.yakuzemi.ac.jp/information/parents110/" rel="noopener" target="_blank"
                       class="switch">保護者の皆さまへ</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>faq"<?php if (is_page('faq')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>よくある質問</a>
                </li>
                <li><a href="https://wp.yakuzemi.ac.jp/contents/pamphlet/yakuzemi2024/" target="_blank" class="switch">学校案内パンフレット</a>
                </li>
            </ul>
        </div><!-- side-menu -->

    <?php elseif (is_page('simulator2024')): ?>
        <div class="side-menu">
            <h3 class="side_menu-title">受講案内</h3>
            <ul class="accordion">
                <li><a href="https://www.yakuzemi.ac.jp/courses-2024" class="switch">2024年度コース</a></li>
                <ul class="side-sub-menu">
                    <li class="menu_title"><a href="">通学・寮・ライブ配信コース</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2024#zennichi_01"><i
                                    class="fas fa-angle-right"></i> &#9312;開講教室</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2024#zennichi_02"><i
                                    class="fas fa-angle-right"></i> &#9313;コースの内容</a></li>
                    <li><a href="#gakushu"> 学修サポート</a></li>
                    <li><a href="#career"> キャリアサポート</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2024#zennichi_03"><i
                                    class="fas fa-angle-right"></i> &#9314;料金表・割引</a></li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>simulator2024"<?php if (is_page('simulator2024')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>受講料シミュレータ</a>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2024#zennichi_04"><i
                                    class="fas fa-angle-right"></i> &#9315;スタートアッププログラム</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>courses-2024#zennichi_05"><i
                                    class="fas fa-angle-right"></i> &#9316;申込方法</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>passing">卒業生に聞いてみよう</a></li>
                </ul>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>exams"<?php if (is_page('exams')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>模擬試験</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>acomo" class="switch">お住まいのご案内</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>loan"<?php if (is_page('loan')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>学費サポート・教育ローン</a>
                </li>
                <li><a href="https://www.yakuzemi.ac.jp/information/parents110/" rel="noopener" target="_blank"
                       class="switch">保護者の皆さまへ</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>passing" class="switch">卒業生に聞いてみよう</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>faq"<?php if (is_page('faq')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>よくある質問</a>
                </li>
                <li><a href="https://wp.yakuzemi.ac.jp/contents/pamphlet/yakuzemi2024/" target="_blank" class="switch">学校案内パンフレット</a>
                </li>
            </ul>
        </div><!-- side-menu -->

    <?php elseif (is_page('exams')): ?>
        <div class="side-menu">
            <h3 class="side_menu-title">受講案内</h3>
            <ul class="accordion">
                <li><a href="https://www.yakuzemi.ac.jp/courses-2024" class="switch">2024年度コース</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>exams"<?php if (is_page('exams')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>模擬試験</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>acomo" class="switch">お住まいのご案内</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>loan"<?php if (is_page('loan')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>学費サポート・教育ローン</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>passing" class="switch">卒業生に聞いてみよう</a></li>
                <li><a href="https://www.yakuzemi.ac.jp/information/parents110/" rel="noopener" target="_blank"
                       class="switch">保護者の皆さまへ</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>faq"<?php if (is_page('faq')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>よくある質問</a>
                </li>
                <li><a href="https://wp.yakuzemi.ac.jp/contents/pamphlet/yakuzemi2024/" target="_blank" class="switch">学校案内パンフレット</a>
                </li>
            </ul>
        </div><!-- side-menu -->

    <?php elseif (is_page('correction-exams')): ?>
        <div class="side-menu">
            <h3 class="side_menu-title">受講案内</h3>
            <ul class="accordion">
                <li><a href="https://www.yakuzemi.ac.jp/courses-2024" class="switch">2024年度コース</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>exams"<?php if (is_page('exams')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>模擬試験</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>acomo" class="switch">お住まいのご案内</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>loan"<?php if (is_page('loan')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>学費サポート・教育ローン</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>passing" class="switch">卒業生に聞いてみよう</a></li>
                <li><a href="https://www.yakuzemi.ac.jp/information/parents110/" rel="noopener" target="_blank"
                       class="switch">保護者の皆さまへ</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>faq"<?php if (is_page('faq')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>よくある質問</a>
                </li>
                <li><a href="https://wp.yakuzemi.ac.jp/contents/pamphlet/yakuzemi2024/" target="_blank" class="switch">学校案内パンフレット</a>
                </li>
            </ul>
        </div><!-- side-menu -->

    <?php elseif (is_page('loan')): ?>
        <div class="side-menu">
            <h3 class="side_menu-title">受講案内</h3>
            <ul class="accordion">
                <li><a href="https://www.yakuzemi.ac.jp/courses-2024" class="switch">2024年度コース</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>exams"<?php if (is_page('exams')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>模擬試験</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>acomo" class="switch">お住まいのご案内</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>loan"<?php if (is_page('loan')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>学費サポート・教育ローン</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>passing" class="switch">卒業生に聞いてみよう</a></li>
                <li><a href="https://www.yakuzemi.ac.jp/information/parents110/" rel="noopener" target="_blank"
                       class="switch">保護者の皆さまへ</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>faq"<?php if (is_page('faq')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>よくある質問</a>
                </li>
                <li><a href="https://wp.yakuzemi.ac.jp/contents/pamphlet/yakuzemi2024/" target="_blank" class="switch">学校案内パンフレット</a>
                </li>
            </ul>
        </div><!-- side-menu -->

    <?php elseif (is_page('passing')): ?>
        <div class="side-menu">
            <h3 class="side_menu-title">受講案内</h3>
            <ul class="accordion">
                <li><a href="https://www.yakuzemi.ac.jp/courses-2024" class="switch">2024年度コース</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>exams"<?php if (is_page('exams')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>模擬試験</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>acomo" class="switch">お住まいのご案内</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>loan"<?php if (is_page('loan')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>学費サポート・教育ローン</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>passing"<?php if (is_page('passing')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>卒業生に聞いてみよう</a>
                </li>
                <li><a href="https://www.yakuzemi.ac.jp/information/parents110/" rel="noopener" target="_blank"
                       class="switch">保護者の皆さまへ</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>faq"<?php if (is_page('faq')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>よくある質問</a>
                </li>
                <li><a href="https://wp.yakuzemi.ac.jp/contents/pamphlet/yakuzemi2024/" target="_blank" class="switch">学校案内パンフレット</a>
                </li>
            </ul>
        </div><!-- side-menu -->

    <?php elseif (is_page('acomo')): ?>
        <div class="side-menu">
            <h3 class="side_menu-title">受講案内</h3>
            <ul class="accordion">
                <li><a href="https://www.yakuzemi.ac.jp/courses-2024" class="switch">2024年度コース</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>exams"<?php if (is_page('exams')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>模擬試験</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>acomo"<?php if (is_page('acomo')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>お住まいのご案内</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>loan"<?php if (is_page('loan')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>学費サポート・教育ローン</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>passing" class="switch">卒業生に聞いてみよう</a></li>
                <li><a href="https://www.yakuzemi.ac.jp/information/parents110/" rel="noopener" target="_blank"
                       class="switch">保護者の皆さまへ</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>faq"<?php if (is_page('faq')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>よくある質問</a>
                </li>
                <li><a href="https://wp.yakuzemi.ac.jp/contents/pamphlet/yakuzemi2024/" target="_blank" class="switch">学校案内パンフレット</a>
                </li>
            </ul>
        </div><!-- side-menu -->

    <?php elseif (is_page('faq')): ?>
        <div class="side-menu">
            <h3 class="side_menu-title">受講案内</h3>
            <ul class="accordion">
                <li><a href="https://www.yakuzemi.ac.jp/courses-2024" class="switch">2024年度コース</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>exams"<?php if (is_page('exams')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>模擬試験</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>acomo"<?php if (is_page('acomo')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>お住まいのご案内</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>loan"<?php if (is_page('loan')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>学費サポート・教育ローン</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>passing" class="switch">卒業生に聞いてみよう</a></li>
                <li><a href="https://www.yakuzemi.ac.jp/information/parents110/" rel="noopener" target="_blank"
                       class="switch">保護者の皆さまへ</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>faq"<?php if (is_page('faq')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>よくある質問</a>
                </li>
                <li><a href="https://wp.yakuzemi.ac.jp/contents/pamphlet/yakuzemi2024/" target="_blank" class="switch">学校案内パンフレット</a>
                </li>
            </ul>
        </div><!-- side-menu -->

    <?php elseif (is_page(array('reference', 'cbt', 'other', 'buy', 'correction', 'bookspharm', 'bookspharmacy', 'booksbooklet', 'shougaibooks')) || is_tax('info_category', 'tools')) : ?>
        <div class="side-menu">
            <h3 class="side_menu-title">書籍案内</h3>
            <ul class="accordion">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>info_category/tools"<?php if (is_page('publications')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>新刊情報</a>
                </li>
                <?php if (is_page(array('reference', 'cbt', 'other', 'bookspharm', 'bookspharmacy', 'booksbooklet', 'shougaibooks'))) : ?>
                    <li class="switch init-bottom current">教材一覧</li>
                    <ul class="side-sub-menu">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>reference">国試対策参考書・問題集</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>cbt">CBT・OSCE対策・低学年次向け</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>other">実務実習・高学年次向け</a></li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>bookspharm">薬学生・薬剤師向け（ファーマブック）</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>bookspharmacy">病院薬剤部・薬局向け（ファーマブック）</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>shougaibooks">薬剤師向け（生涯学習テキスト）</a>
                        </li>
                    </ul>
                <?php else: ?>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>reference" class="switch init-bottom">教材一覧</a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>buy"<?php if (is_page('buy')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>ご購入はこちら</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>correction"<?php if (is_page('correction')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>書籍訂正情報</a>
                </li>
            </ul>
        </div><!-- side-menu -->

    <?php elseif (is_page(array('message-2024', 'school-2024', 'school-2018', 'about', 'mission', 'credo', 'message-2018', 'pharmacy', 'sdgs', 'feature', 'voices', 'globalchallenge'))): ?>
        <div class="side-menu">
            <h3 class="side_menu-title">学校情報</h3>
            <ul class="accordion">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>message-2024"<?php if (is_page('message-2024')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>ごあいさつ</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>school-2024"<?php if (is_page('school-2024')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>薬ゼミについて</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>feature"<?php if (is_page('feature')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>薬ゼミ講師の特徴</a>
                </li>
                <?php if (is_page('pharmacy')) : ?>
                    <li class="switch init-bottom current">薬ゼミの運営する薬局</li>
                    <ul class="side-sub-menu"><!---->
                        <li><a href="#01">まごころ薬局の思い</a></li>
                        <li><a href="#02">上北沢店</a></li>
                        <li><a href="#03">東大泉店</a></li>
                        <li><a href="#04">南長崎店</a></li>
                        <li><a href="#09">阿佐ヶ谷店</a></li>
                        <li><a href="#10">久我山店</a></li>
                        <li><a href="#05">今福店</a></li>
                        <li><a href="#06">北坂戸店</a></li>
                        <li><a href="#07">志木ハイデンスサロン店</a></li>
                        <li><a href="#08">月吉店</a></li>
                    </ul>
                <?php else: ?>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>pharmacy"
                           class="switch init-bottom">薬ゼミの運営する薬局</a></li>
                <?php endif; ?>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>sdgs"<?php if (is_page('sdgs')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>薬ゼミ×SDGs</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>globalchallenge"<?php if (is_page('globalchallenge')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>薬ゼミ
                        国際事業への思い</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>candidate"<?php if (is_page('candidate')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>採用情報</a>
                </li>
            </ul>
        </div>

    <?php elseif (is_page(array('faq_online', 'online-courses'))) : ?>
        <div class="side-menu">
            <h3 class="side_menu-title">オンライン教室</h3>
            <ul class="accordion">
                <li><a href="https://www.yakuzemi.ac.jp/online" rel="noopener" target="_blank" class="switch">オンライン教室について</a>
                </li>
                <li><a href="https://yakuzemi.study.jp/rpv/" target="_blank"
                       class="switch">オンライン教室にログインする</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>faq_online"<?php if (is_page('faq_online')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>よくある質問</a>
                </li>
            </ul>
        </div><!-- side-menu -->

    <?php elseif (is_page(array('mycourse'))) : ?>
        <div class="side-menu">
            <h3 class="side_menu-title">受講案内</h3>
            <ul class="accordion">
                <li><a href="https://www.yakuzemi.ac.jp/courses-2024" class="switch">2024年度コース</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>exams"<?php if (is_page('exams')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>模擬試験</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>acomo"<?php if (is_page('acomo')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>お住まいのご案内</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>loan"<?php if (is_page('loan')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>学費サポート・教育ローン</a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>passing" class="switch">卒業生に聞いてみよう</a></li>
                <li><a href="https://www.yakuzemi.ac.jp/information/parents110/" rel="noopener" target="_blank"
                       class="switch">保護者の皆さまへ</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>faq"<?php if (is_page('faq')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>よくある質問</a>
                </li>
                <li><a href="https://wp.yakuzemi.ac.jp/contents/pamphlet/yakuzemi2024/" target="_blank" class="switch">学校案内パンフレット</a>
                </li>
            </ul>
        </div><!-- side-menu -->

    <?php elseif (is_page(array('candidate', 'internship', 'system', 'requirements', 'session', 'entryform', 'voice_001', 'voice_002', 'voice_003', 'voice_004', 'voice_005', 'voice_006', 'voice_007', 'voice_008', 'voice_009', 'voice_010', 'voice_011', 'voice_012'))) : ?>
        <div id="accordion" class="side-menu">
            <h3 class="side_menu-title">採用情報</h3>
            <ul>
                <li><a href="https://recruit-yakuzemi.igakuacademy.jp/" target="_blank"
                       class="switch">採用特設サイト</a></li>
                <li><a href="https://recruit-yakuzemi.igakuacademy.jp/entry-input/" target="_blank" class="switch">採用エントリーフォーム</a>
                </li>
                <li><a href="https://recruit-yakuzemi.igakuacademy.jp/seminar-entry-input/" target="_blank"
                       class="switch">採用説明会エントリーフォーム</a></li>
                <li><a href="https://recruit-yakuzemi.igakuacademy.jp/internship-entry-input/" target="_blank"
                       class="switch">インターンシップエントリーフォーム</a></li>
            </ul>
        </div>

        <div class="side-menu">
            <h3 class="side_menu-title">講師の声</h3>
            <ul class="accordion">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>voice_001"<?php if (is_page('voice_001')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>VOICE
                        001 松本賢</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>voice_002"<?php if (is_page('voice_002')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>VOICE
                        002 宮崎元</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>voice_003"<?php if (is_page('voice_003')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>VOICE
                        003 伊藤真人</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>voice_004"<?php if (is_page('voice_004')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>VOICE
                        004 髙西ひかり</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>voice_005"<?php if (is_page('voice_005')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>VOICE
                        005 小林あつみ</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>voice_006"<?php if (is_page('voice_006')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>VOICE
                        006 真柄詩織</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>voice_007"<?php if (is_page('voice_007')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>VOICE
                        007 宮島彩</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>voice_008"<?php if (is_page('voice_008')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>VOICE
                        008 中村裕士</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>voice_009"<?php if (is_page('voice_009')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>VOICE
                        009 石塚博康</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>voice_010"<?php if (is_page('voice_010')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>VOICE
                        010 鬼倉佑季</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>voice_011"<?php if (is_page('voice_011')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>VOICE
                        011 光増雄太</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>voice_012"<?php if (is_page('voice_012')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>VOICE
                        012 赤岩容子</a></li>
            </ul>
        </div>

    <?php elseif (is_page(array('remedial_omoi', 'reme_contents', 'remedial', 'kobetsu_contact', 'butsuri-matsubara', 'butsuri-kamiaka', 'kagaku-tanaka', 'seibutsu-sumi', 'ph_data', 'kobetsu-koushi', 'remedial-faq'))): ?>
        <div class="side-menu">
            <h3 class="side_menu-title">低学年・個別指導</h3>
            <ul class="accordion">
                <li class="switch init-bottom current">個別指導について</li>
                <ul class="side-sub-menu">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>remedial"<?php if (is_page('remedial')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>薬ゼミの個別指導</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>kobetsu-koushi"<?php if (is_page('kobetsu-koushi')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>こんな講師が教えています</a>
                    </li>
                </ul>
                <li class="switch init-bottom current">基礎教育支援室について</li>
                <ul class="side-sub-menu">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>remedial_omoi"<?php if (is_page('remedial_omoi')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>教室の思い</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>ph_data"<?php if (is_page('ph_data')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>数字で見る薬剤師</a>
                    </li>
                </ul>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>reme_contents"<?php if (is_page('reme_contents')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>コンテンツ紹介</a>
                </li>
                <li class="switch init-bottom current">勉強のコツ</li>
                <ul class="side-sub-menu">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>butsuri-matsubara"<?php if (is_page('butsuri-matsubara')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>「物理」松原講師</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>butsuri-kamiaka"<?php if (is_page('butsuri-kamiaka')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>「物理」上赤講師</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>kagaku-tanaka"<?php if (is_page('kagaku-tanaka')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>「化学」田中講師</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>seibutsu-sumi"<?php if (is_page('seibutsu-sumi')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>「生物」数見講師</a>
                    </li>
                </ul>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>remedial-faq"<?php if (is_page('remedial-faq')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>よくある質問</a>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>kobetsu_contact"<?php if (is_page('kobetsu_contact')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>個別指導お問い合わせ</a>
            </ul>
        </div><!-- side-menu -->

    <?php elseif (is_home()) : ?>
        <div class="info-pickup">
            <?php //お知らせ
            $loop = new WP_Query(array(
                    'post_type' => 'information',
                    'posts_per_page' => 1,
            ));
            if ($loop->have_posts()) : while ($loop->have_posts()): $loop->the_post();
                ?>
                <time datetime="<?php the_time(__('Y-m-d')) ?>"><?php the_time(__('Y.m.d')) ?></time>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('side-thumb'); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/banner_side-default.png"
                             alt="薬学ゼミナール"/>
                    <?php endif; ?>
                </a>
                <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
            <?php endwhile; endif;
            wp_reset_postdata(); ?>
        </div>
    <?php endif; ?>

    <?php get_template_part('include/side_banner'); ?>

</div>