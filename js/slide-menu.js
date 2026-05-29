$(document).ready(function () {
    // 初期状態では隠す
    $('#accordion_box ul').hide();

    // 第1階層トリガー
    // 開閉はトリガー直下の <a> ラベルのタップだけで行う。
    // （li 全体にバインドすると、配下の実リンクをタップした際にもバブリングで
    //   発火してメニューが閉じてしまうため、直下の <a> に限定する）
    $('#accordion_box > li.main_trigger > a').click(function (e) {
        e.stopPropagation();
        var $li = $(this).parent();
        $li.children('ul').slideToggle(300);
        $li.toggleClass('is-open');
        // 他の第1階層を閉じてアイコンをリセット
        $('#accordion_box > li.main_trigger').not($li)
            .children('ul').slideUp(300)
            .end().removeClass('is-open');
    });

    // 第2階層トリガー（同上、直下の <a> ラベルのみで開閉）
    $('#accordion_box > li > ul > li.main_trigger > a').click(function (e) {
        e.stopPropagation();
        var $li = $(this).parent();
        $li.children('ul').slideToggle(300);
        $li.toggleClass('is-open');
        // 他の第2階層を閉じてアイコンをリセット
        $li.siblings('li.main_trigger')
            .children('ul').slideUp(300)
            .end().removeClass('is-open');
    });
});
