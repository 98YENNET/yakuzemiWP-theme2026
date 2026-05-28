$(document).ready(function () {
    // 初期状態では隠す
    $('#accordion_box ul').hide();

    // 第1階層トリガー
    $('#accordion_box > li.main_trigger').click(function (e) {
        e.stopPropagation();
        $(this).children('ul').slideToggle(300);
        $(this).toggleClass('is-open');
        // 他の第1階層を閉じてアイコンをリセット
        $('#accordion_box > li.main_trigger').not(this)
            .children('ul').slideUp(300)
            .end().removeClass('is-open');
    });

    // 第2階層トリガー
    $('#accordion_box > li > ul > li.main_trigger').click(function (e) {
        e.stopPropagation();
        $(this).children('ul').slideToggle(300);
        $(this).toggleClass('is-open');
        // 他の第2階層を閉じてアイコンをリセット
        $(this).siblings('li.main_trigger')
            .children('ul').slideUp(300)
            .end().removeClass('is-open');
    });
});
