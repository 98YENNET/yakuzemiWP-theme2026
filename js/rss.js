$.ajax({
    url: 'http://aqwiki.net/rss/rss_list.txt',
    success: function (data) {

        var rss_url = 'http://www.yakuzemi.ac.jp/blog/feed/' + data;

        var htmlstr = "";
        htmlstr += '<h2><a href="http://aqwiki.net/rss/ko.html" rel="nofollow" target="_blank">アクアリウムWiki 相互RSS</a> 新着記事</h2>';
        htmlstr += '<div class="all_body">';
        htmlstr += '<ul>';

        $.get(rss_url, function (data) {
            $(data).find("item").each(function (i) { // or "entry"
                var el = $(this);

                var oddeven = (i % 2 == 0) ? 'lieven' : 'liodd'; //oddとevenを付けるため。三項演算子
                htmlstr += '<li class="' + oddeven + '">';
                htmlstr += '<img src="http://www.google.com/s2/favicons?domain=' + el.find("link").text() + '">';
                htmlstr += '<a href="' + el.find("link").text() + '" title="' + el.find("title").text() + '" rel="nofollow" target="_blank">' + el.find("title").text() + ' - ' + el.find("category").text() + '</a>';
                htmlstr += '</li>';

            });

            htmlstr += '</ul>';
            htmlstr += '</div>';

            var container = document.getElementById("aq_feed");
            container.innerHTML = htmlstr;

        });
    }
});