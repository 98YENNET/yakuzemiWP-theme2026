<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>
            <?php get_template_part('include/sns'); ?>
            <article class="post">
                <br/><br/><br/>

                <img src="<?php echo WWP_THEME_URI; ?>/wlc/pages/supporters2023/supportersmap.png" usemap="#ImageMap"
                     alt="" width="951" height="888"/>
                <map name="ImageMap">
                    <area shape="circle" coords="761,345,174" href="#hokkaido" alt=""/>
                    <area shape="circle" coords="673,603,101" href="#kanto" alt=""/>
                    <area shape="circle" coords="505,589,86" href="#chubu" alt=""/>
                    <area shape="circle" coords="394,676,70" href="#kansai" alt=""/>
                    <area shape="circle" coords="248,658,88" href="#chugoku" alt=""/>
                    <area shape="circle" coords="119,773,96" href="#kyushu" alt=""/>
                </map>


                <br/><br/><br/>
                <ul class='supporters2020'>
                    <li class='hmug'>
                        青本・青問・埋め本・ゴロ単語カードマークは、それぞれ青本応援企業・青問・埋め本・ゴロ単語カード応援企業です！
                    </li>
                    <li class='ug'><a
                                href="https://www.yakuzemi.ac.jp/supporters_seminar/">埋め本・ゴロ単語カード協賛企業の一覧はこちら</a>
                    </li>
                </ul>
                <?php
                $areas["hokkaido"] = "北海道・東北";
                $areas["kanto"] = "関東甲信越";
                $areas["chubu"] = "中部・北陸";
                $areas["kansai"] = "関西";
                $areas["chugoku"] = "中国・四国";
                $areas["kyushu"] = "九州";

                $filepath = dirname(__FILE__) . "/wlc/pages/supporters2023/list.txt";

                $file = new SplFileObject($filepath);

                $file->setFlags(SplFileObject::READ_CSV);
                $file->setCsvControl("\t");
                foreach ($file as $line) {
                    $records[] = $line;
                }
                //print_r($records);

                foreach ($areas as $key => $value) {
                    echo "<a name='$key' id='$key'></a>　<br />　<br />　<br />" . "\r\n";
                    echo '<h2 class="post-title mb20">' . $value . '</h2>' . "\r\n";
                    echo "<ul class='supporters2020'>" . "\r\n";;
                    foreach ($records as $k => $v) {
                        //echo $v[3].$value."\r\n";
                        if ($v[0] == $value) {
                            $class = "";
                            if (trim($v[1])) {
                                $class .= "h";
                            }
                            if (trim($v[2])) {
                                $class .= "m";
                            }
                            if (trim($v[3])) {
                                $class .= "u";
                            }
                            if (trim($v[4])) {
                                $class .= "g";
                            }
                            echo "<li class='$class'><a href='{$v[6]}' target='_blank'>" . $v[5] . "</a></li>" . "\r\n";
                        }
                    }

                    echo "</ul>" . "\r\n";;
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

    <script src="<?php echo WWP_THEME_URI; ?>/wlc/js/rwdImageMaps2.js"></script>
    <script>
        $(function () {
            //$('img[usemap]').rwdImageMaps();
            imageMapConv($('img[usemap]'));
            //$(window).resize(function(){imageMapConv($('img[usemap]'));console.log("a");});
            setInterval(function () {
                imageMapConv($('img[usemap]'));
            }, 1000);
        });
    </script>

<?php get_footer(); ?>