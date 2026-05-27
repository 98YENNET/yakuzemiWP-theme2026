<?php
$includePath = __DIR__;
$npmPath = "/home/daemon/share/npm/v2025002";
if(!is_dir($npmPath)){
    $npmPath = "C:/Users/admin/Documents/Projects/K.開発/npm/dev/v2025002";
}
$tsIncludePath = $npmPath."/scripts/typescript.inc.php";
$assetPath = realpath(__DIR__."/../");
$distPath = realpath(__DIR__."/../../");
$tsSorceDir = $assetPath."/js/src";
$entryPath = $tsSorceDir."/index.ts";
$jsDir = $distPath."/js/compiled";
$jsName = "main.js";
$hashPath = $distPath."/js/compiled/hash.txt";
$packageJsonTemplatePath = $assetPath."/js/_package.json";
$webpackConfigTemplatePath = $assetPath."/js/_webpack.config.js";

$replaceValueNames = ["npmPath","tsIncludePath","assetPath","tsSorceDir","entryPath","jsDir","jsName","hashPath"];

//$tsPath = $tsSorceDir."/style.ts";
//$cssPath = __DIR__."/style.css";
//print_r($cssPath);
$sourceFiles = $tsSorceDir;
$jsPath = isset($jsPath) ? $jsPath : $jsDir."/".$jsName;
