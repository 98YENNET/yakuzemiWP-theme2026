<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <ul>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                          href="<?php echo esc_url(home_url('/')); ?>"><span
                        itemprop="name">TOP</span></a>
            <meta itemprop="position" content="1"/>
        </li>
        &gt;
        <?php if (is_page(array('school', 'about', 'mission', 'credo', 'message', 'pharmacy', 'csr', 'feature', 'voices'))) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                        itemprop="name">学校情報</span>
                <meta itemprop="position" content="2"/>
            </li>
        <?php endif; ?>
        &gt;
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                    itemprop="name"><?php the_title(); ?></span>
            <meta itemprop="position" content="3"/>
        </li>
    </ul>
</div>