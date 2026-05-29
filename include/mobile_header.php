<header class="hidePC">
    <div class="contact-box">
        <ul>
            <li><a href="https://www.mypage.yakuzemi.ac.jp/login/" target="_blank">
                    <svg class="icon icon-book">
                        <use xlink:href="#icon-book"/>
                    </svg>
                    受講申込み<br>（マイページ）</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>contact/">
                    <svg class="icon icon-book">
                        <use xlink:href="#icon-book"/>
                    </svg>
                    お問い合わせ・<br>FAQ</a></li>
        </ul>
    </div>

    <div class="logo-wrapper">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <svg class="logo-yakuzemi">
                    <use xlink:href="#logo-yakuzemi"/>
                </svg>
            </a>
            <h1 class="site-title"><?php bloginfo('description'); ?></h1>
        </div>

        <div class="sp-header-actions">
            <div class="sb-toggle-right mb-menu-button">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <a class="sp-action-icon" href="<?php echo esc_url(home_url('/')); ?>contact/">
                <span class="sp-action-icon__circle">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M11.07 12.85c.77-1.39 2.25-2.21 3.11-3.44.91-1.29.4-3.7-2.18-3.7-1.69 0-2.52 1.28-2.87 2.34L6.54 6.96C7.25 4.83 9.18 3 11.99 3c2.35 0 3.96 1.07 4.78 2.41.7 1.15 1.11 3.3.03 4.9-1.2 1.77-2.35 2.31-2.97 3.45-.25.46-.35.76-.35 2.24h-2.89c-.01-.78-.13-2.05.48-3.15zM14 20c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2z"/>
                    </svg>
                </span>
                <span class="sp-action-icon__label">FAQ</span>
            </a>

            <a class="sp-action-icon" href="https://www.mypage.yakuzemi.ac.jp/login" target="_blank" rel="noopener">
                <span class="sp-action-icon__circle">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1s3.1 1.39 3.1 3.1v2z"/>
                    </svg>
                </span>
                <span class="sp-action-icon__label">MY PAGE</span>
            </a>
        </div><!-- sp-header-actions -->
    </div><!-- logo-wrapper -->

</header>