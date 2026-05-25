# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

このファイルはアクティブな WordPress テーマ `yakuzemi` ディレクトリ専用のメモです。リポジトリ全体の構成（`/yz/` 配下に WP
本体がある件、`transfer.inc.php`、`.htaccess` のバリアント、CPT を提供する Types プラグイン、DB 接頭辞 `yrq82h49_` など）は親階層の
`yakuzemi/CLAUDE.md` 側にまとまっているので、まずそちらを読んでから本ファイルに目を通してください。

## このディレクトリを触る前提

- **ディレクトリ全体が `.gitignore` 対象です** (リポジトリ直下の `.gitignore:9` — `yz/wp-content/themes/yakuzemi/`)
  。ここで何を編集しても `git status` には現れません。バージョン管理されている古いスナップショットは隣の `yakuzemi_/`
  ですが、本番と一致している保証はないので**参照用としてのみ**扱い、編集対象にはしないでください。
- テーマヘッダ上の名前は "Yakugaku Seminar" / Author "SMILE FM 76.7MHz" / Version "2016.6" (style.css:1-8)。実態はその後
  WEELOCH（gb@98yen.net）による継ぎ足し改修が積み重なった状態です。
- ビルド・テスト・リンタなし。`*.php` / `*.css` / `*.js` を直接編集し、ブラウザで叩いて確認するワークフローです。

## テンプレート解決の癖（年タグ付きファイルの扱い）

`page-simulator.php` 〜 `page-simulator2026.php`、`page-supporters2019.php` 〜 `page-supporters2023.php` のような年タグ付き
`page-*.php` は **死蔵バックアップではなく、固定ページのスラッグに紐づく現役テンプレート**です。WordPress のテンプレート階層
`page-{slug}.php` の規則どおりに、スラッグ `simulator2026` の固定ページが `page-simulator2026.php` を呼びます。実際に
`sidebar.php:25` から `simulator2026` がリンクされており、2026 年度版がアクティブです。

逆に、以下は WP のテンプレート階層上どのスロットにも当たらないので**死蔵ファイル**として扱っていいです（削除はユーザー確認必須・親
CLAUDE.md の規約参照）:

- `archive.250612.php`、`functions.190221.php`、`header..190221php`（ファイル名の `..` はタイポのまま）、
  `sidebar.php.200223`、`sidebar_backup_250223.php`、`sidebar_backup_250224.php`
- `index.211201.php`、`index250315.php`、`index_backup_240426.php`、`index_backup_260222.php`
- `page-feed240111.php`、`page-home211129.php`
- `include_200420/`（現役の `include/` の旧コピー一式）

何かを編集する際は、必ず**日付/年タグの付かない方**（`functions.php`、`header.php`、`index.php`、`sidebar.php`
など）と、対応するアクティブな年版を見てください。

## 主要パーツと読み込み経路

- **共通パーツ:** `include/` 配下を `get_template_part('include/...')` で読み込みます。実例: `header.php:78` が
  `include/svg.php`（SVG スプライト約 31KB）、`single-classroom.php`・`index.php` などが `include/class_category_label.php`
  や `include/reference.php` をロード。新規パーツを追加するなら同パターンに揃えてください。
- **ヘッダ:** `header.php` が直接 `<head>` を組み立てています。PC/SP の出し分けは `is_mobile()`（`functions.php:292-310`
  のサーバサイド UA スニッフ）。`iPad` は意図的にリストに無く PC 扱いです。SP 判定時のみ `slidebars.css` / `animate.css` /
  `js/slide-menu.js` を追加ロード（`header.php:21-25`）。
- **カノニカル:** `header.php:66-69` で現在 URL を `www2` → `www` に置換して `<link rel="canonical">` を出力。
  `www.yakuzemi.ac.jp`（本サイト）への SEO 集約用なので、テストドメインで動かす際は重複/誤指定に注意。
- **CSS キャッシュバスト:** `header.php:20` で `style.css?YYMMDDxx` のクエリ文字列を手動更新する運用。スタイル変更時はこの数字も同時に更新します。
- **GTM:** `GTM-WWK5QRKM` を `header.php:6-11` でハードコード。

## functions.php の非自明な挙動（544 行・全部読まなくていいが要点だけ把握）

- **`register_post_type('information', ...)` を再宣言** (`functions.php:18-24`)。Types プラグイン側で登録されている
  `information` に `supports: thumbnail` を後付けするためだけの上書きです。CPT 本体の登録は Types 側、テーマ側は thumbnail
  を有効化しているだけ、と認識してください。
- **「投稿」→「講習会情報」へリラベル** (`functions.php:160-198`)。デフォルトの `post` CPT が管理画面上で「講習会情報」として振る舞います。
  `information`（お知らせ）とは別物なので混同しないこと。
- **jQuery を 1.11.2 に強制ダウングレード**（`functions.php:276-282`、`//ajax.googleapis.com/...` CDN から）。WP 同梱の
  jQuery を `wp_deregister_script` で外しているため、3.x 前提の最近のプラグインを入れると壊れます。
- **管理者以外のメニュー剥がし**は `functions.php:71-111`（`my_remove_menu` / `my_remove_menu2`）に集中。編集者から「UI
  が出ない」と言われたらまずここ。
- **カスタム月別アーカイブ**: `my_get_year_archives()` + `my_pre_get_posts()`（`functions.php:404-490`）。`post` の月別アーカイブを
  postmeta `date`（`YYYY/MM` 形式）の LIKE 検索に**置き換え**ます。`is_month` でのメインクエリ挙動が WP 標準と異なる点に注意。
- **`wp_kses_allowed_html` で `iframe` 解放** (`functions.php:522-536`)。投稿者が動画埋め込みを貼るために必要。属性は
  `class/src/width/height/frameborder/scrolling/marginheight/marginwidth` のみ通します。
- **`author` ロールに `publishpress_future_expire_post` を付与** (`functions.php:539-544`)。Post Expirator プラグイン前提。

## `wlc/` ディレクトリ（WEELOCH 製ミニフレームワーク）

- `functions.php:498` が `wlc/define.php` を require し、`WWP_THEME_PATH` / `WWP_THEME_URI` / `WWP_UPLOADA_URI` /
  `WWP_URL` / `WWP_CONV_PATH` / `WWP_CONV_URL` の定数と `$WWP_REPLACES` プレースホルダ表をグローバルに張ります。
- `the_content` フィルタとして `wlcConv()`（`functions.php:500-507`）が登録され、本文中の `WWP_THEME_URI` などの**文字列リテラルを実
  URL に置換**します。投稿本文に環境差分を持ち込まないための置換層です。
- `wlc/define.php:2-7` で `/mnt/landiskgx/htdocs/ctrl/config/config.php` の存在を見て `WWP_MODE` を `staging` /
  `production` に振り分けます。Windows ローカルでは常に `production` 判定。
- `wlc/wlc.common.css` / `wlc.pc.css` / `wlc.sp.css` / `wlc.js` は `header.php:50-53` で**全ページに無条件ロード**
  。テーマ全体の上書きスタイルが入っているので、見た目崩れの一次容疑者になります。
- `wlc/pages/` は年度別のキャンペーン用素材置き場（`supporters2026/`、`simulator2025/`、`lectures/` など）。PHP として実行されるのは
  `lectures/tag.inc.php` のみで、他はデータファイル（`list.txt`・画像）です。

## `carousel/` ディレクトリ（教室ページのスライドショー）

- `single-classroom.php:43` が `carousel/include.php` を直接 `include`。
- 設定は `carousel/classrooms/{教室スラッグ}/setting.php` に `$classImages` 配列で記述。同ディレクトリに画像ファイルを並べる方式。
- **画像 URL が `https://www2.yakuzemi.ac.jp/yz/wp-content/themes/yakuzemi/carousel/...` でハードコード**されています（
  `carousel/include.php:51-94`）。ローカル/ステージング環境では絶対パスのまま本番に向かって 404 /
  ミックスコンテンツ警告になるので、別ホストで動作確認する場合は `home_url()` ベースに差し替えるか、本番に上げてから確認してください。
- スライダーは `slick-carousel@1.8.1` を jsDelivr 経由で読み込み（同ファイル 47-49 行）。

## アセット運用メモ

- `js/` には旧式の jQuery プラグインや zip（`animatedModal.js-master.zip`）が同居しています。新規追加するなら zip
  は展開せずに参照しないこと。
- `css/slick*.css` と `wlc/` 側、CDN 経由（`header.php:42-43` の Font Awesome 4.7 と 5.0.6）が**二重に同居**
  しているので、アイコン関連は両方確認してから増減させてください。
- `images/` にはファビコン・ホーム画面アイコンの一式 (apple-touch-icon, android-chrome, manifest.json) があり、
  `header.php:26-46` で個別 `<link>` 出力されています。
