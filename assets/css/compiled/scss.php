<?php
$includePath = realpath(__DIR__."/../../npm/css");
include $includePath."/config.php";
include $dartCssIncludePath;
//echo $dartCssIncludePath;exit;
header("Content-type: text/css");
echo file_get_contents($cssPath);

