function sendImage() {
    var form = $('#editForm').get(0);
    var formData = new FormData(form);
    console.log(form)

    $.ajax({
        url: 'p.imageUpload.php',
        type: "POST",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json"
    }).done(function (res) {
        // 送信せいこう！
        console.log('SUCCESS', res);
        $('#editedContent').val($('#editedContent').val() + "\n" + "#wlc_i(" + res.updaloaded + ",40);");
    }).fail(function (jqXHR, textStatus, errorThrown) {
        // しっぱい！
        console.log('ERROR', jqXHR, textStatus, errorThrown);
    });
}

function setPW() {
    /*
    var str = CryptoJS.SHA256("yyg2008");
    var hashbase64 = str.toString(CryptoJS.enc.Base64);
    console.log(hashbase64);
    */


    var pw = prompt("enter  pw");
    var hashbase64 = "uihQDzTp31kvCJNpd+0E4qWNmgbmklSo8fCOEBir9iU=";
    var encrypt = CryptoJS.AES.encrypt(pw, hashbase64);
    var output = "#wlc_pw(" + encrypt.toString() + ");";
    wlcInsertString(output);
}

function wlc_pw_decode() {
    var key = prompt("enter  key");
    var str = CryptoJS.SHA256(key);
    var hashbase64 = str.toString(CryptoJS.enc.Base64);

    var targets = $("body").find(".wlc_pw");
    for (var i = 0; i < targets.length; i++) {
        var target = targets[i];
        var encrypt = $(target).html();
        decrypt = CryptoJS.AES.decrypt(encrypt, hashbase64);
        $(target).html(decrypt.toString(CryptoJS.enc.Utf8));
    }
}

function gao() {
    console.log("gaogao");
}


gao();


var abc = "aaa";

/*
$(function() {
	$('#submitBtn').on('click', function(evt) {
	var form = $('#myForm').get()[0];
	 
	// FormData オブジェクトを作成
	var formData = new FormData( form );
	
	// Ajaxで送信
	$.ajax({
		url: '/api'
		method: 'post',
		dataType: 'json',
		// dataに FormDataを指定
		data: formData,
		// Ajaxがdataを整形しない指定
		processData: false,
		// contentTypeもfalseに指定
		contentType: false
	}).done(function( res ) {
		// 送信せいこう！
		console.log( 'SUCCESS', res );
	}).fail(function( jqXHR, textStatus, errorThrown ) {
		// しっぱい！
		console.log( 'ERROR', jqXHR, textStatus, errorThrown );
	});

	return false;
	});
});
*/