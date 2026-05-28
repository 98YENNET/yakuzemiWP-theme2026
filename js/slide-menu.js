$(document).ready(function () {
    //初期状態では隠す
    $('#accordion_box ul').hide();
    //親をクリックしたら
    $('.main_trigger').click(function () {
        //クリックされた子供のｕｌを表示する
        $(this).children('ul').slideDown(300);
        //それ以外のulは隠す
        $('#accordion_box  > li >ul').not($(this).children('ul')).slideUp(300);
    });
    $('#accordion_box > li > ul > li').click(function () {
        $(this).children('ul').slideDown(300);
        $('#accordion_box > li > ul > li > ul').not($(this).children('ul')).slideUp(300);
    });
});
