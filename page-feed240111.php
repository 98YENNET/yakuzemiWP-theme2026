<?php
ini_set('display_errors', "On");
//echo "xxx";
//include_once(ABSPATH . WPINC . '/feed.php');
//$rss = fetch_feed('http://blog.yakuzemi.ac.jp/feed/'); //RSSのURLの指定
//print_r($rss);

/*
$url = "https://www.sejuku.net/blog/";

//cURLセッションを初期化する
$ch = curl_init();

//URLとオプションを指定する
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//URLの情報を取得する
$res =  curl_exec($ch);

//結果を表示する
var_dump($res);

//セッションを終了する
curl_close($conn);
*/
//curlセッションを開始する
$ch = curl_init();

//通信時のオプションを設定する
curl_setopt($ch, CURLOPT_URL, "http://www.google.com/");

//データを送信もしくは受信する
$data = curl_exec($ch);
var_dump($data);

//curlセッションを終了する
curl_close($ch);
exit;
//取得したデータをHTML出力
echo htmlspecialchars($data);