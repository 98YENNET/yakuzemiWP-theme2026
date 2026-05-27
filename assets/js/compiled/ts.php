<?php
$includePath = realpath(__DIR__."/../../npm/js");
include $includePath."/config.php";
include $tsIncludePath;
header("Content-type: text/javascript");
if(!isset($jsPath)){	
	$jsPath = $jsDir."/".$jsName;
}
echo file_get_contents($jsPath);

