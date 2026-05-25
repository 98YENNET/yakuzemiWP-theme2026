<div class="breadcrumbs clearfix" itemscope itemtype="http://schema.org/BreadcrumbList">
    <ul>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                          href="<?php echo esc_url(home_url('/')); ?>"><span
                        itemprop="name">TOP</span></a>
            <meta itemprop="position" content="1"/>
        </li>
        <li>&gt;</li>
        <?php if (is_page(array('courses-2023', 'may_june', 'sep', 'sun', 'acomo', 'loan'))) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name">受講案内</span>
                <meta itemprop="position" content="2"/>
            </li>
            <li>&gt;</li>
        <?php elseif (is_page('classroom-and-instructors') || is_page('remedial-support') || is_singular('classroom')) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name">教室・講師紹介</span>
                <meta itemprop="position" content="2"/>
            </li>
            <li>&gt;</li>
        <?php elseif (is_page('trade-law')) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name">オンライン教室</span>
                <meta itemprop="position" content="2"/>
            </li>
            <li>&gt;</li>
        <?php elseif (is_page('jikosaiten')) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name">国家試験情報</span>
                <meta itemprop="position" content="2"/>
            </li>
            <li>&gt;</li>
        <?php elseif (is_page('exams') || is_page('correction-exams')) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name">模擬試験</span>
                <meta itemprop="position" content="2"/>
            </li>
            <li>&gt;</li>
        <?php elseif (is_page(array('publications', 'reference', 'correction', 'cbt', 'other', 'buy'))) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name">書籍案内</span>
                <meta itemprop="position" content="2"/>
            </li>
            <li>&gt;</li>
        <?php elseif (is_page(array('candidate', 'system', 'requirements', 'session', 'entryform'))) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name">講師採用</span>
                <meta itemprop="position" content="2"/>
            </li>
            <li>&gt;</li>
        <?php elseif (is_page(array('school', 'about', 'mission', 'credo', 'message', 'pharmacy', 'csr', 'feature'))) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name">学校情報</span>
                <meta itemprop="position" content="2"/>
            </li>
            <li>&gt;</li>
        <?php elseif (is_tax('info_category')) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name"><?php single_cat_title(); ?>一覧</span>
                <meta itemprop="position" content="2"/>
            </li>
        <?php elseif (is_post_type_archive('textbook_correction')) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">追補・書籍訂正情報</span>
                <meta itemprop="position" content="2"/>
            </li>
        <?php elseif (is_post_type_archive('information')) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">薬ゼミからのお知らせ一覧</span>
                <meta itemprop="position" content="2"/>
            </li>
        <?php elseif (is_post_type_archive('yakuzemiplus')) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">YAKUZEMI+</span>
                <meta itemprop="position" content="2"/>
            </li>
        <?php elseif (get_post_type() == 'passing') : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name">受講案内</span>
                <meta itemprop="position" content="2"/>
            </li>
            <li>&gt;</li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name">合格者の声</span>
                <meta itemprop="position" content="2"/>
            </li>
        <?php elseif (is_archive()) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name"><?php single_cat_title(); ?> 講習会情報一覧</span>
                <meta itemprop="position" content="2"/>
            </li>
        <?php elseif (get_post_type() === 'post'): ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name"><a
                            href="<?php echo esc_url(home_url('/')); ?>seminar">講習会情報</a></span>
                <meta itemprop="position" content="2"/>
            </li>
            <li>&gt;</li>
        <?php elseif (get_post_type() === 'information'): ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name"><a
                            href="<?php echo esc_url(home_url('/')); ?>information">薬ゼミからのお知らせ</a></span>
                <meta itemprop="position" content="2"/>
            </li>
            <li>&gt;</li>
        <?php else: ?>
        <?php endif; ?>
        <?php if (!is_archive()): ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name"><?php the_title(); ?></span>
                <meta itemprop="position" content="3"/>
            </li>
        <?php endif; ?>
    </ul>
</div><!-- #breadcrumbs -->
