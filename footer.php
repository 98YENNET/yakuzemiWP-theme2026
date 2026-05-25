<?php if (is_mobile()): ?>
    <?php get_template_part('include/sns'); ?>
<?php else: ?>
    <?php get_template_part('include/footer_sitemap'); ?>
<?php endif; ?>

<footer>
    <div class="footer-banner clearfix mb20">
        <ul>
            <!-- <li><a href="http://www.mizuhogroup.net/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/footer/banner_mizuho-group.png" alt="MIZUHO Group"></a></li> -->
            <li><a href="https://igakuacademy.ac.jp/" target="_blank"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/footer/iag376.png"
                            alt="学校法人医学アカデミーグループ"></a></li>
            <li><a href="https://www.yakuzemi-shougai.jp/" target="_blank"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/footer/banner_syougai-gakusyu@2x.png"
                            alt="一般社団法人　薬学ゼミナール生涯学習センター"></a></li>
            <li><a href="https://www.ytl.jp/" target="_blank"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/footer/banner_ytl@2x.png" alt="YTL"></a>
            </li>
            <li><a href="http://www.yakuzemi-support.com/" target="_blank"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/footer/banner_support.png"
                            alt="薬ゼミ情報教育センター"></a></li>
            <li><a href="https://www.yakuzemi.ac.jp/pharmacy" target="_blank"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/footer/banner_magokoro@2x.png"
                            alt="まごころ薬局"></a></li>
            <li><a href="https://www.iapt.jp/" target="_blank"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/footer/banner_rigakuryouhou@2x.png"
                            alt="専門学校医学アカデミー 理学療法学科"></a></li>
            <li><a href="https://iadh.jp/" target="_blank"><img
                            src="https://www2.yakuzemi.ac.jp/yz/wp-content/uploads/bnr_dh_v2.png"
                            alt="専門学校医学アカデミー 歯科衛生士学科"></a></li>
            <li><a href="https://www.mizuhokai.or.jp/" target="_blank"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/footer/banner_mizuho@2x.png"
                            alt="医療法人　瑞穂会"></a></li>
            <li><a href="https://sakura-mizuhokai.or.jp/" target="_blank"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/footer/banner_sakura-mizuho@2x.png"
                            alt="社会福祉法人　さくら瑞穂会"></a></li>
            <li><a href="https://mizuho-msc.com/" target="_blank"><img
                            src="https://www2.yakuzemi.ac.jp/yz/wp-content/uploads/bnr_msc_v2.png"
                            alt="瑞穂MSC高等学校"></a></li>
        </ul>
    </div>
    <div class="mb_line">
        <p>薬剤師国家試験対策予備校<br>
            <span class="footer-logo">薬学ゼミナール</span></p>
    </div>
    <p class="copy"><small>&copy;<?php echo date('Y'); ?> IGAKU ACADEMY</small></p>
    <section class="sns-box">
        <ul class="sns_button">
            <li><a href="https://liff.line.me/1656872021-gB4GGQbK/b8fd2d84af6c4729bcd0743e7e4565e0" target="_blank"
                   rel="noopener noreferrer"><i class="fab fa-line"></i></a></li>
            <li><a href="https://www.facebook.com/yakuzemi/" target="_blank" rel="noopener noreferrer"><i
                            class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.yakuzemi.ac.jp/information/sns/#instagram" target="_blank"
                   rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.yakuzemi.ac.jp/information/sns/#tw" target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" height="36" width="36" viewBox="0 0 448 512"
                         style="margin-right: 20px;">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                        <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"/>
                    </svg>
                </a></li>
            <li><a href="https://www.youtube.com/channel/UCXhjEGKFsrmXm-oUvlGTftA" target="_blank"
                   rel="noopener noreferrer"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </section>
</footer>

<?php if (is_mobile()) : ?>
    <?php get_template_part('include/mb_footer_menu'); ?>
    </div><!-- sb-site -->
    <?php get_template_part('include/mobile_menu'); ?>
<?php else : ?>
    </div><!-- sb-site -->
<?php endif; ?>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/accordion.js"></script>
<?php if (is_page('classroom-and-instructors')) : ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.rwdImageMaps.min.js"></script>
    <script>
        $(document).ready(function (e) {
            $('img[usemap]').rwdImageMaps();
        });
    </script>
<?php endif; ?>
<?php if (is_mobile()) : ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slidebars.min.js"></script>
    <script>
        (function ($) {
            $(document).ready(function () {
                $.slidebars();
            });
        })(jQuery);
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/animatedModal.min.js"></script>
    <script>
        $(function () {
            $('#modal-menu01').animatedModal({
                modalTarget: 'modal-content01',
                animatedIn: 'fadeInDown',
                animatedOut: 'fadeOutUp',
                animationDuration: '1s',
                color: '#FFF',
            });
            //背景色を半透明に
            $('#modal-content01').css('backgroundColor', 'rgba(0,0,0,0.8)');
        });
        $(function () {
            $('#modal-menu02').animatedModal({
                modalTarget: 'modal-content02',
                animatedIn: 'fadeInDown',
                animatedOut: 'fadeOutUp',
                animationDuration: '1s',
                color: '#FFF',
            });
            //背景色を半透明に
            $('#modal-content02').css('backgroundColor', 'rgba(0,0,0,0.8)');
        });
        $(function () {
            $('#modal-menu03').animatedModal({
                modalTarget: 'modal-content03',
                animatedIn: 'fadeInDown',
                animatedOut: 'fadeOutUp',
                animationDuration: '1s',
                color: '#FFF',
            });
            //背景色を半透明に
            $('#modal-content03').css('backgroundColor', 'rgba(0,0,0,0.8)');
        });
        $(function () {
            $('#modal-menu04').animatedModal({
                modalTarget: 'modal-content04',
                animatedIn: 'fadeInDown',
                animatedOut: 'fadeOutUp',
                animationDuration: '1s',
                color: '#FFF',
            });
            //背景色を半透明に
            $('#modal-content04').css('backgroundColor', 'rgba(0,0,0,0.8)');
        });
    </script>
<?php endif; ?>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script>
    window.twttr = (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], t = window.twttr || {};
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);
        t._e = [];
        t.ready = function (f) {
            t._e.push(f);
        };
        return t;
    }(document, "script", "twitter-wjs"));
</script>
<!-- チャットボット -->
<script type="text/javascript">
    <!--
    var vgHost = 'chat3-240.chatdealer.jp', vgProtocol = 'https', vgPort = '443', vgAtxt = 't1LHyChat3-240', vgSid = 9;
    (function () {
        try {
            var ins = document.createElement('script'), dt = new Date, tg = document.getElementsByTagName('script')[0];
            ins.type = 'text/javascript';
            ins.async = !0;
            ins.setAttribute('charset', 'utf-8');
            ins.src = vgProtocol + '://' + vgHost + ':' + vgPort + '/chat/client.js?' + dt.getTime();
            tg.parentNode.insertBefore(ins, tg);
        } catch (e) {
            console.log(e);
        }
    })();
    //-->
</script>
</body>
</html>