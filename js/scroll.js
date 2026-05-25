$(function () {
    var pageTop = $(".page-top-mk2");
    pageTop.click(function () {
        $('body, html').animate({scrollTop: 0}, 500);
        return false;
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 200) {
            pageTop.css("bottom", "10px");
        } else {
            pageTop.css("bottom", "-80px");
        }
    });
});
//スムーズスクロール
jQuery(function () {
    // #で始まるアンカーをクリックした場合に処理
    jQuery('a[href^=#]').click(function () {
        // スクロールの速度
        var speed = 500; // ミリ秒
        // アンカーの値取得
        var href = jQuery(this).attr("href");
        // 移動先を取得
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        // 移動先を数値で取得
        var position = target.offset().top;
        // スムーススクロール
        jQuery('body,html').animate({scrollTop: position}, speed, 'swing');
        return false;
    });
});