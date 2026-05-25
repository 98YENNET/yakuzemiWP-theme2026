<div class="right-contents">
    <div class="side-menu">

        <h3 class="side_menu-title">教室・講師紹介</h3>
        <ul class="accordion">
            <li>
                <a href="<?php echo esc_url(home_url('/')); ?>classroom-maps/" <?php if (is_page('classroom-maps')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>全国の教室一覧</a>
            </li>
            <li class="switch init-bottom">北海道・東北</li>
            <ul class="side-sub-menu">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/sapporo"<?php if (is_object_in_term($post->ID, 'classroom_category', 'sapporo')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>札幌教室</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/sendai"<?php if (is_object_in_term($post->ID, 'classroom_category', 'sendai')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>仙台教室</a>
                </li>
            </ul>
            <li class="switch init-bottom">関東</li>
            <ul class="side-sub-menu">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/tsudanuma"<?php if (is_object_in_term($post->ID, 'classroom_category', 'tsudanuma')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>津田沼教室</a>
                </li>
                <li><a href="https://igakuacademy.ac.jp/ph/" target="_blank">医学アカデミー川越校</a></li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/ikebukuro"<?php if (is_object_in_term($post->ID, 'classroom_category', 'ikebukuro')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>池袋教室</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/shinjyuku"<?php if (is_object_in_term($post->ID, 'classroom_category', 'shinjyuku')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>新宿教室</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/ichigaya"<?php if (is_object_in_term($post->ID, 'classroom_category', 'ichigaya')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>市ヶ谷教室</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/yokohama"<?php if (is_object_in_term($post->ID, 'classroom_category', 'yokohama')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>横浜教室</a>
                </li>
            </ul>
            <li class="switch init-bottom">東海</li>
            <ul class="side-sub-menu">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/nagoya"<?php if (is_object_in_term($post->ID, 'classroom_category', 'nagoya')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>名古屋教室</a>
                </li>
            </ul>
            <li class="switch init-bottom">関西</li>
            <ul class="side-sub-menu">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/osaka"<?php if (is_object_in_term($post->ID, 'classroom_category', 'osaka')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>大阪教室</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/kobe"<?php if (is_object_in_term($post->ID, 'classroom_category', 'kobe')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>神戸教室</a>
                </li>
            </ul>
            <li class="switch init-bottom">中国・四国</li>
            <ul class="side-sub-menu">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/hiroshima"<?php if (is_object_in_term($post->ID, 'classroom_category', 'hiroshima')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>広島教室</a>
                </li>
            </ul>
            <li class="switch init-bottom">九州</li>
            <ul class="side-sub-menu">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/fukuoka"<?php if (is_object_in_term($post->ID, 'classroom_category', 'fukuoka')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>福岡教室</a>
                </li>
            </ul>
            <li class="switch init-bottom">ネット</li>
            <ul class="side-sub-menu">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/live"<?php if (is_object_in_term($post->ID, 'classroom_category', 'live')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>ライブ配信教室</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/online"<?php if (is_object_in_term($post->ID, 'classroom_category', 'online')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>オンデマンド教室</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>classroom/metaverse"<?php if (is_object_in_term($post->ID, 'classroom_category', 'online')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>メタバース教室</a>
                </li>
            </ul>
            <li>
                <a href="<?php echo esc_url(home_url('/')); ?>classroom/support"<?php if (is_page('support')): ?> class="switch current" <?php else: ?> class="switch" <?php endif; ?>>サポート</a>
            </li>
        </ul>

    </div><!-- //side-menu -->
</div>