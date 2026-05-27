<?php
$includePath = __DIR__;
$npmPath = "/home/daemon/share/npm/v2025002";
if(!is_dir($npmPath)){
    //win用
    $npmPath = "C:/Users/admin/Documents/Projects/K.開発/npm/dev/v2025002";
}

$dartCssIncludePath = $npmPath."/scripts/dartscss.inc.php";
$assetPath = realpath(__DIR__."/../../");
$distPath = realpath(__DIR__."/../../");
$scssSorceDir = __DIR__."/src";
$scssPath = $scssSorceDir."/style.scss";
$cssPath = $distPath."/css/compiled/style.css";
$hashPath = $distPath."/css/compiled/hash.txt";
