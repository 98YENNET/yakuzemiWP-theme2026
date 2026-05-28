<!doctype html>
<html lang="ja">
<head <?php ogp_prefix(); ?>>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WWK5QRKM');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanjp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi&family=M+PLUS+1p:wght@500;700;800&family=Zen+Old+Mincho:wght@400;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?26052801">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/compiled/style.css?<?php echo trim(file_get_contents(get_template_directory() . '/assets/css/compiled/hash.txt')); ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slidebars.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/animate.css"/>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slide-menu.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/compiled/main.js?<?php echo trim(file_get_contents(get_template_directory() . '/assets/js/compiled/hash.txt')); ?>"></script>
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png"
          sizes="32x32">
    <link rel="icon" type="image/png"
          href="<?php echo get_template_directory_uri(); ?>/images/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-96x96.png"
          sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png"
          sizes="16x16">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/manifest.json">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#5bbad5">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <meta name="apple-mobile-web-app-title" content="薬ゼミ">
    <meta name="application-name" content="薬ゼミ">
    <meta name="msapplication-TileColor" content="#014a96">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/mstile-144x144.png">
    <meta name="theme-color" content="#014a96">


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/wlc/wlc.common.css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/wlc/wlc.pc.css" rel="stylesheet" type="text/css"
          media="only screen and (min-width: 768px)"/>
    <link href="<?php echo get_template_directory_uri(); ?>/wlc/wlc.sp.css" rel="stylesheet" type="text/css"
          media="only screen and (max-width: 767px)"/>
    <script src="<?php echo get_template_directory_uri(); ?>/wlc/wlc.js"></script>


    <script><!--
        function open_book(url, name, option) {
            if (navigator.userAgent.indexOf("Android") != -1)
                option = '';
            window.open(url, name, option);
        }

        --></script>
    <?php
    $fullURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $fullURL = str_replace("www2", "www", $fullURL);
    ?>
    <link rel="canonical" href="<?php echo $fullURL; ?>"/>
</head>
<body class="drawer drawer--right aft26">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWK5QRKM"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<?php get_template_part('include/svg'); ?>

<?php get_template_part('include/mobile_header'); ?>
<div id="sb-site">

    <?php get_template_part('include/pc_header'); ?>