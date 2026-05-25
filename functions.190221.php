<?php
// アイキャッチ機能を有効にする
add_theme_support('post-thumbnails');
// カスタムポスト「お知らせ」のアイキャッチ機能を有効にする
register_post_type(
    'information',
    // 'supports'に'thumbnail'を追記
    array('supports' => array('title', 'editor', 'thumbnail'))
);

// 独自画像サイズ設定
add_image_size('side-thumb', 180, 135, true); // TOPページサイド画像
add_image_size('side-thumb-mb', 480, 240, true); // TOPページサイド画像（モバイル向け）

// 固定ページの親ページと子ページをスラッグで判定する
function is_parent_slug()
{
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    }
}

// カスタム投稿タイプのfeedを表示
function myfeed_request($qv)
{
    if (isset($qv['feed']) && !isset($qv['post_type']))
        $qv['post_type'] = array('post', 'information');
    return $qv;
}

add_filter('request', 'myfeed_request');

/*
// ビジュアルエディタの不要なボタンを削除
function tinymce_delete_buttons( $array ) {
	$array = array_diff($array, array('italic','strikethrough','blockquote','hr','alignleft','aligncenter','alignright','wp_more','fullscreen','wp_adv'));
	return $array;
}
add_filter( 'mce_buttons', 'tinymce_delete_buttons' );

function tinymce_delete_buttons_2( $array_2 ) {
	$array_2 = array_diff($array_2, array('formatselect','underline','alignjustify','forecolor','charmap','outdent','indent','wp_help'));
	return $array_2;
}
add_filter( 'mce_buttons_2', 'tinymce_delete_buttons_2' );
*/
// MASTER SLIDERボタンを削除
function admin_css_custom()
{
    echo '<style>#mceu_99 {display: none !important;}</style>';
}

if (!current_user_can('administrator'))
    add_action('admin_print_styles', 'admin_css_custom');

// 管理者以外は指定メニューを消す
function my_remove_menu()
{
    remove_menu_page('edit-comments.php');  // コメントの非表示
    remove_menu_page('edit.php?post_type=page'); //固定ページ
    remove_menu_page('edit.php?post_type=classroom'); //教室
    remove_menu_page('edit.php?post_type=yakuzemiplus'); //薬ゼミプラス
    remove_menu_page('edit.php?post_type=instructors'); //講師
    remove_menu_page('master-slider');
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category'); //カテゴリー
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag'); //タグ
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=classroom_category'); //教室カテゴリー
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=info_category'); //お知らせカテゴリー
    remove_submenu_page('edit.php?post_type=information', 'edit-tags.php?taxonomy=classroom_category&amp;post_type=information'); //教室カテゴリー（お知らせ）
    remove_submenu_page('edit.php?post_type=information', 'edit-tags.php?taxonomy=info_category&amp;post_type=information'); //お知らせカテゴリー（お知らせ）
    remove_submenu_page('edit.php?post_type=textbook_correction', 'edit-tags.php?taxonomy=correction-cat&amp;post_type=textbook_correction'); //書籍訂正情報カテゴリー
    remove_submenu_page('edit.php?post_type=mw-wp-form', 'post-new.php?post_type=mw-wp-form'); //MW WP Form
    remove_submenu_page('edit.php?post_type=mw-wp-form', 'edit.php?post_type=mw-wp-form'); //MW WP Form（新規追加）
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=seminar_month'); //実施月
    remove_menu_page('tools.php'); // ツール
}

if (!current_user_can('administrator'))
    add_action('admin_menu', 'my_remove_menu');

// 管理者以外はAll in One SEO Pack欄を消す
function remove_aiosp_meta_box()
{
    if (!current_user_can('administrator')) {
        remove_meta_box('aiosp', 'post', 'advanced');
    }
}

add_action('admin_menu', 'remove_aiosp_meta_box', 1000);

// ダッシュボードウィジェット非表示
function remove_dashboard_widgets()
{
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // 現在の状況
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // 最近のコメント
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // 被リンク
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // プラグイン
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // クイック投稿
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // 最近の下書き
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPressブログ
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPressフォーラム
}

if (!current_user_can('administrator'))
    add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

// 管理バーの項目を非表示
function remove_admin_bar_menu($wp_admin_bar)
{
    $wp_admin_bar->remove_menu('wp-logo'); // WordPressシンボルマーク
    $wp_admin_bar->remove_menu('my-account'); // マイアカウント
}

add_action('admin_bar_menu', 'remove_admin_bar_menu', 70);

// 管理バーのヘルプメニューを非表示にする
function my_admin_head()
{
    echo '<style type="text/css">#contextual-help-link-wrap{display:none;}</style>';
}

add_action('admin_head', 'my_admin_head');

// 管理バーにログアウトを追加
function add_new_item_in_admin_bar()
{
    global $wp_admin_bar;
    $wp_admin_bar->add_menu(array(
        'id' => 'new_item_in_admin_bar',
        'title' => __('ログアウト'),
        'href' => wp_logout_url()
    ));
}

add_action('wp_before_admin_bar_render', 'add_new_item_in_admin_bar');

// 「投稿」のラベルを変更
function revcon_change_post_label()
{
    global $menu;
    global $submenu;
    $menu[5][0] = '講習会情報';
    $submenu['edit.php'][5][0] = '講習会情報一覧';
    $submenu['edit.php'][10][0] = '新規追加';
    $submenu['edit.php'][16][0] = 'タグ';
    echo '';
}

function revcon_change_post_object()
{
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = '講習会情報';
    $labels->singular_name = '講習会情報';
    $labels->add_new = '新規追加';
    $labels->add_new_item = '講習会情報を追加';
    $labels->edit_item = '講習会情報の編集';
    $labels->new_item = '講習会情報';
    $labels->view_item = '講習会情報の表示';
    $labels->search_items = '講習会情報を検索';
    $labels->not_found = '講習会情報が見つかりませんでした。';
    $labels->not_found_in_trash = 'ゴミ箱内に講習会情報が見つかりませんでした。';
    $labels->all_items = '全ての講習会情報';
    $labels->menu_name = '講習会情報';
    $labels->name_admin_bar = '講習会情報';
}

add_action('admin_menu', 'revcon_change_post_label');
add_action('init', 'revcon_change_post_object');

//メニューの表示順を変更
function custom_menu_order($menu_ord)
{
    if (!$menu_ord) return true;

    return array(
        'index.php', // ダッシュボード
        'separator1', // 最初の区切り線
        'edit.php?post_type=information', // お知らせ
        'edit.php', // 講習会情報
        'upload.php', // メディア
        'link-manager.php', // リンク
        'edit.php?post_type=page', // 固定ページ
        'edit-comments.php', // コメント
        'separator2', // 二つ目の区切り線
        'themes.php', // 外観
        'plugins.php', // プラグイン
        'users.php', // ユーザー
        'tools.php', // ツール
        'options-general.php', // 設定
        'separator-last', // 最後の区切り線
    );
}

add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');

// HTMLエディタフォント設定
function change_editor_font()
{
    echo "<style type='text/css'>
#wp-content-editor-container textarea {
	font-family: \"Ricty Diminished\", sans-serif;
	font-size: 14pt;
	line-height: 1.5;
}
</style>";
}

add_action("admin_print_styles", "change_editor_font");

// テーマのウィジェット対応
function arphabet_widgets_init()
{
    register_sidebar(array(
        'name' => 'サイドバー',
        'id' => 'sidebar-1',
        'before_widget' => '<section>',
        'after_widget' => '</section>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
}

add_action('widgets_init', 'arphabet_widgets_init');

//投稿画面にスタイル差し込み
function editor_style_admin_head()
{
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/editor-style.css" />';
}

add_action('admin_head', 'editor_style_admin_head');

function isFirst()
{
    global $wp_query;
    return ($wp_query->current_post === 0);
}

function isLast()
{
    global $wp_query;
    return ($wp_query->current_post + 1 === $wp_query->post_count);
}

function isOdd()
{
    global $wp_query;
    return ((($wp_query->current_post + 1) % 2) === 1);
}

function isEvery()
{
    global $wp_query;
    return ((($wp_query->current_post + 1) % 2) === 0);
}

function load_cdn()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '1.11.2');
    }
}

add_action('init', 'load_cdn');

function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
    if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
        $slug = utf8_uri_encode($post_type) . '-' . $post_ID;
    }
    return $slug;
}

add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);

function is_mobile()
{
    $useragents = array(
        'iPhone',          // iPhone
        'iPod',            // iPod touch
        'Android',         // 1.5+ Android
        'dream',           // Pre 1.5 Android
        'CUPCAKE',         // 1.5+ Android
        'blackberry9500',  // Storm
        'blackberry9530',  // Storm
        'blackberry9520',  // Storm v2
        'blackberry9550',  // Storm v2
        'blackberry9800',  // Torch
        'webOS',           // Palm Pre Experimental
        'incognito',       // Other iPhone browser
        'webmate'          // Other iPhone browser
    );
    $pattern = '/' . implode('|', $useragents) . '/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// facebook OGP
function ogp_prefix()
{
    if (!is_admin()) {
        $ogp_ns = 'og: http://ogp.me/ns#';
        $fb_ns = 'fb: http://ogp.me/ns/fb#';

        if (!is_singular()) {
            $type_ns = 'website: http://ogp.me/ns/website#';
        } else {
            $type_ns = 'article: http://ogp.me/ns/article#';
        }
        printf('prefix="%1$s %2$s %3$s"', $ogp_ns, $fb_ns, $type_ns);
    }
}

function ogp_meta()
{
    if (!is_admin()) {

        global $post;
        $format = '<meta property="%1$s" content="%2$s">';
        $type = 'website';
        $url = esc_url(home_url('/'));
        $site_name = esc_attr(get_option('blogdescription'));
        $title = $site_name;
        $image = esc_url(home_url('/yz/wp-content/uploads/facebook-ogp.png'));
        $description = esc_attr(get_option('blogdescription'));
        $app_id = '000000000000000';

        if (is_singular()) {
            $type = 'article';
            $url = esc_url(get_permalink($post->ID));
            $title = esc_attr($post->post_title);
            $description = strip_tags($post->post_excerpt ? $post->post_excerpt : $post->post_content);
            $description = mb_substr($description, 0, 90) . '...';
            if (function_exists('has_post_thumbnail') and has_post_thumbnail($post->ID)) {
                $attachment = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                $image = esc_url($attachment[0]);
            } elseif (preg_match('/<img\s[^>]*src=["\']?([^>"\']+)/i', $post->post_content, $match)) {
                $image = esc_url($match[1]);
            }
            $publisher = $url;
            printf($format, 'article:publisher', $publisher);
        }

        $args = array(
            'og:type' => $type,
            'og:url' => $url,
            'og:title' => $title,
            'og:image' => $image,
            'og:site_name' => $site_name,
            'og:description' => $description,
            'fb:app_id' => $fb_app_id
        );
        foreach ($args as $key => $value) {
            printf($format, $key, $value);
        }
    }
}

add_action('wp_head', 'ogp_meta');

// facebook like
function likeCount($str = null)
{
    if ($str) $url = $str;
    else $url = ((!empty($_SERVER['HTTPS'])) ? "https://" : "http://") . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $json = file_get_contents('http://graph.facebook.com/' . $url, true);
    $data = json_decode($json, true);
    return ($data[shares]) ? $data[shares] : 0;
}

// ページャー機能
function wp_pagination()
{
    global $wp_query;
    $big = 99999999;
    $page_format = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'array'
    ));
    if (is_array($page_format)) {
        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
        echo '<ul>';
        echo '<li><span>' . '全 ' . $wp_query->max_num_pages . 'ページ</span></li>';
        foreach ($page_format as $page) {
            echo "<li>$page</li>";
        }
        echo '</ul>';
    }
    wp_reset_query();
}

//カスタムフィールドの日付でカスタム投稿の年月別アーカイブ
function my_get_year_archives($args = '')
{
    global $wpdb, $wp_locale;

    $defaults = array(
        'date_field' => 'date',
        'format' => 'html',
        'echo' => true,
        'limit' => '',
        'before' => '',
        'after' => '',
        'show_post_count' => true,
    );

    $r = wp_parse_args($args, $defaults);
    extract($r, EXTR_SKIP);

    if ('' != $limit) {
        $limit = absint($limit);
        $limit = ' LIMIT ' . $limit;
    }

    $field = 'm.meta_value';
    $select = "SELECT SUBSTRING($field,1,4) AS `year`, SUBSTRING($field,6,2) AS `month`, count(p.ID) AS posts";
    $where = "WHERE p.post_type = 'post' AND p.post_status = 'publish'";
    $where .= $wpdb->prepare(' AND m.meta_key = %s', $date_field);
    $join = " INNER JOIN $wpdb->postmeta AS m ON m.post_id = p.ID";

    $where = apply_filters('getarchives_where', $where, $r);
    $join = apply_filters('getarchives_join', $join, $r);

    $output = '';
    $query = "$select FROM $wpdb->posts AS p $join $where GROUP BY SUBSTRING($field,1,4), SUBSTRING($field,6,2) ORDER BY $field DESC $limit";
    $key = md5($query);
    $cache = wp_cache_get('my_get_year_archives', 'general');
    if (!isset($cache[$key])) {
        $arcresults = $wpdb->get_results($query);
        $cache[$key] = $arcresults;
        wp_cache_set('my_get_year_archives', $cache, 'general');
    } else {
        $arcresults = $cache[$key];
    }
    if ($arcresults) {
        $afterafter = $after;
        foreach ((array)$arcresults as $arcresult) {
            //$url = add_query_arg( array( 'meta_key' => $date_field ), get_year_link( $arcresult->year ) );
            $url = add_query_arg(array('meta_key' => $date_field), get_month_link($arcresult->year, $arcresult->month));
            $text = sprintf('%d', $arcresult->year) . '/' . sprintf('%d', $arcresult->month);
            if ($show_post_count)
                $after = '&nbsp;(' . $arcresult->posts . ')' . $afterafter;
            $output .= get_archives_link($url, $text, $format, $before, $after);
        }
    }

    if ($echo)
        echo $output;
    else
        return $output;
}

add_action('init', 'my_init');
function my_init()
{
    global $wp;
    $wp->add_query_var('meta_key');
}

add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query)
{
    if (is_admin() || !$query->is_main_query() || is_preview())
        return;
    if ($query->is_month) {
        $meta_query = array(
            array(
                'key' => $query->get('meta_key'),
                'value' => $query->get('year') . '/' . sprintf('%02d', $query->get('monthnum')),
                'compare' => 'LIKE'
            ),
        );

        $query->set('meta_query', $meta_query);
        $query->set('year', '');
        $query->set('monthnum', '');
        $query->set('date', '');
        $query->set('meta_key', '');
        $query->set('post_type', 'post');
    }
}