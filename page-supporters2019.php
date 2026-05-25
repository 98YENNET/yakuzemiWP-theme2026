<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>
            <?php get_template_part('include/sns'); ?>
            <article class="post">
                <br/><br/><br/>

                <img src="<?php echo WWP_THEME_URI; ?>/wlc/pages/supporters2019/supportersmap.png" usemap="#ImageMap"
                     alt="" style="width:100%;"/>
                <map name="ImageMap">
                    <area shape="circle" coords="761,345,174" href="#" alt=""/>
                    <area shape="circle" coords="673,603,101" href="#" alt=""/>
                    <area shape="circle" coords="505,589,86" href="#" alt=""/>
                    <area shape="circle" coords="394,676,70" href="#" alt=""/>
                    <area shape="circle" coords="248,658,88" href="#" alt=""/>
                    <area shape="circle" coords="119,773,96" href="#" alt=""/>
                </map>

                <script src="<?php echo WWP_THEME_URI; ?>/wlc/js/jquery.rwdImageMaps.min.js"></script>
                <script>
                    $(function () {
                        $('img[usemap]').rwdImageMaps();
                    });
                </script>
                <br/><br/><br/>
                <ul class='supporters2019'>
                    <li class='aohon'>青本マークは、青本応援企業です！</li>
                </ul>
                <?php
                $areas["hokkaido"] = "北海道・東北";
                $areas["kanto"] = "関東甲信越";
                $areas["chubu"] = "中部・北陸";
                $areas["kansai"] = "関西";
                $areas["chugoku"] = "中国・四国";
                $areas["kyushu"] = "九州";

                $filepath = dirname(__FILE__) . "/wlc/pages/supporters2019/list.txt";

                $file = new SplFileObject($filepath);

                $file->setFlags(SplFileObject::READ_CSV);
                $file->setCsvControl("\t");
                foreach ($file as $line) {
                    $records[] = $line;
                }

                foreach ($areas as $key => $value) {
                    echo "<br /><a name='$key'></a>" . "\r\n";
                    echo '<h2 class="post-title mb20">' . $value . '</h2>' . "\r\n";
                    echo "<ul class='supporters2019'>" . "\r\n";;
                    foreach ($records as $k => $v) {
                        //echo $v[3].$value."\r\n";
                        if ($v[4] == $value) {
                            $class = "";
                            if (trim($v[3])) {
                                $class = "aohon";
                            }
                            echo "<li class='$class'><a href='{$v[8]}' target='_blank'>" . $v[5] . "</a></li>" . "\r\n";
                        }
                    }

                    echo "</ul><br /><br />" . "\r\n";;
                }

                ?>


            </article>

        </div><!-- left-contents -->

        <?php if (is_page(array('classroom-and-instructors', 'kawagoe_dorm', 'classroom-maps', 'remedial-support'))) : ?>
            <?php get_template_part('include/side_classroom'); ?>
        <?php else: ?>
            <?php get_sidebar(); ?>
        <?php endif; ?>

    </div><!-- page-contents -->

<?php get_footer(); ?>