var DCProductURLs = {
    "mobileweb": "html5m.html"
};

var DCshowiPhone = RegExp("AppleWebKit").test(navigator.userAgent) && RegExp("Mobile").test(navigator.userAgent);
var DCshowAndroid = RegExp("Android").test(navigator.userAgent);
var DCshowSilk = RegExp("Silk").test(navigator.userAgent);


if (DCshowiPhone || DCshowAndroid || DCshowSilk) {
    var hs = window.location.hash;
    var p = hs.substr(1)
    if (Number(p) > 0) hs = "#page=" + p;
    var sr = window.location.search;
    if (sr == "") {
        sr = "?s=score";
    } else {
        sr += "&s=score";
    }
    if (hs == "") hs = "#page=1";
    window.location.href = DCProductURLs["mobileweb"] + sr + hs;
}
