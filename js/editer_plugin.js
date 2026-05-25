(function () {
    tinymce.create('tinymce.plugins.newButtons', {
        getInfo: function () {
            return {
                longname: 'Float Clear Button',
                author: 'Nori Takahashi',
                authorurl: 'http://webdesignrecipes.com/',
                infourl: 'http://webdesignrecipes.com/',
                version: "1.0.0"
            };
        },
        init: function (ed, url) {
            var t = this;
            t.editor = ed;
            ed.addCommand('brClear',
                function () {
                    var str = t._newButton();
                    ed.execCommand('mceInsertContent', false, str);
                });
            ed.addButton('brClear', {
                title: 'フロートクリア',
                cmd: 'brClear',
                image: url + '/cl.gif'
            });
        },
        _newButton: function (d, fmt) {
            str = '<div style="display:block;clear:both;"><img src="http://gardening-market.sakura.ne.jp/wp/wp-content/themes/gardening-market-iikuraen/images/1x1.gif" alt="" /></div>';
            return str;
        }
    });
    tinymce.PluginManager.add('newButtons', tinymce.plugins.newButtons);
})();