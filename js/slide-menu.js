$(document).ready(function () {
    // 初期状態では隠す
    $('#accordion_box ul').hide();

    // 第1階層トリガー
    // stopPropagation で上位へのバブリングを止める
    $('#accordion_box > li.main_trigger').click(function (e) {
        e.stopPropagation();
        $(this).children('ul').slideDown(300);
        $('#accordion_box > li.main_trigger').not(this).children('ul').slideUp(300);
    });

    // 第2階層トリガー
    // stopPropagation で第1階層への誤ったバブリングを止める
    // （バブリングすると第2階層が一瞬閉じようとする）
    $('#accordion_box > li > ul > li.main_trigger').click(function (e) {
        e.stopPropagation();
        $(this).children('ul').slideDown(300);
        $(this).siblings('li.main_trigger').children('ul').slideUp(300);
    });
});
