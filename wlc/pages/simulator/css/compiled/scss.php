<?php
ini_set('display_errors', 1);
/*----------------------------------------
 *
 * �t�@�C���𐶐����������́A���L���e�ŁA.htaccess�����ɒu��
 * .htaccess��
 *
 *
-----------------------------------------------------
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} "\.(css|CSS)$"
RewriteRule . scss.php [L]
</IfModule>
----------------------------------------------------- */

//echo "scss.php";exit;
//print_r($_SERVER);exit;
/*------------
	CONFIG
	*/

include __DIR__ . "/config.php";


function scss_addZero($n)
{
    $n = $n . "";
    while (strlen($n) < 6) {
        $n = "0" . $n;
    }
    return $n;
}


$mode = "included";//include�ŌĂ΂ꂽ�ꍇ�́Ahtml�̃R�[�h��Ԃ�
$requestUrlBaseDir = substr($_SERVER["SCRIPT_NAME"], 0, strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
if (strpos($_SERVER["SCRIPT_NAME"], "scss.php") !== false) {
    $mode = "css";
    $requestUrlBaseDir = substr($_SERVER["REQUEST_URI"], 0, strrpos($_SERVER["REQUEST_URI"], "/") + 1);

    //�{�A�b�v���ɏ��������Ȃ��ŁA�R���e���c��Ԃ����@���l����H.htaccess�폜�ł����邯��
}


//$mode="included";
//print_r($scssSorceDirs);exit;


/*
	�t�@�C���ƃf�B���N�g���������āACSS�̃t�@�C������ݒ肵��HTML�ɏo��
	*/
if ($mode == "included") {

    $dirs = array();

    /*
    $commonArray = array();
    $commonArray[0]="common";
    $commonArray[1]="";
    $commonArray[2]="";
    $dirs[] = $commonArray;
    */
    //print_r($scssSorceDirs);echo"\r\n";
    foreach ($scssSorceDirs as $key => $scssDir) {
        //echo $scssDir."\r\n";
        if ($handle = opendir($scssDir)) {
            while (($file = readdir($handle)) !== false) {
                if ($file != "." && $file != "..") {
                    //echo "$file\n";
                    if (strpos($file, "print") !== false) {
                        $matches = array("print");
                        $dirs[] = $matches;
                    } else {
                        $ptn = "/.*\.(\d+|.{0})\-(\d+|.{0})\.scss/";
                        if (preg_match($ptn, $file, $matches)) {
                            //print_r($matches);
                            $matches[0] = $matches[1] . "-" . $matches[2];
                            $dirs[] = $matches;
                        } else {
                            $ptn = "/(\d+|.{0})\-(\d+|.{0})/";
                            if (preg_match($ptn, $file, $matches)) {
                                $dirs[] = $matches;
                            }
                        }
                    }
                }
            }
            closedir($handle);
        }
    }
    $dirs = array_unique($dirs, SORT_REGULAR);
    //print_r($dirs);exit;
    $ret = "";
    $returnCode = "\r\n";

    //�V���{���b�N�����N�̏ꍇ�́A�ǂݍ��ݑ���$scssphpIncludePath�������N�̃p�X�Őݒ肷��
    if (isset($scssphpIncludePath)) {
        $cssUrlDir = str_replace($_SERVER["DOCUMENT_ROOT"], "", dirname($scssphpIncludePath));
    } else {
        $cssUrlDir = str_replace(realpath($_SERVER["DOCUMENT_ROOT"]), "", realpath(__DIR__));
    }

    $cssLines = array();
    $counter = 0;
    //print_r($dirs);exit;
    foreach ($dirs as $key => $dir) {
        if ($dir[0] == "print") {
            $cssKey = "print";
            $cssLines[$cssKey] = "<link rel='stylesheet' href='$cssUrlDir/print.css' media='print'>";
        } else {
            $max = "";
            $min = "";
            if ($dir[2]) {
                $max = "and (max-width:" . $dir[2] . "px)";
            } else {
                $dir[2] = "";
            }
            if ($dir[1]) {
                $min = "and (min-width:" . $dir[1] . "px)";
            } else {
                $dir[1] = "";
            }
            if ($dir[1] == 0 && !$dir[2]) {
                $min = "";
                $max = "";
            }
            $queryString = "";
            //laravel�p��const��ǂݍ���ł������Aconfig.php�Ńt�@�C����ǂ݂ɍs���悤�ɕύX�����̂ŁA�폜
            //if(function_exists('config')){
            //	$queryString = "?ApplicationMode=".config("const.ApplicationMode");
            //}

            $cssKey = scss_addZero($dir[1]) . "-" . scss_addZero($dir[2]) . "-" . scss_addZero($counter);
            $cssLines[$cssKey] = "<link rel='stylesheet' href='$cssUrlDir/" . $dir[0] . ".css{$queryString}' media='print, screen $min $max  '>";
        }
    }
    ksort($cssLines);
    foreach ($cssLines as $key => $cssLine) {
        $ret .= $cssLine . $returnCode;
    }

    //exit;
    //echo $ret;exit;
    return $ret;
}

//echo $_SERVER["DOCUMENT_ROOT"];exit;


//print_r($scssSorceDirs);exit;
$makeCss = false;
$contents = "";
if (@$_GET["f"]) {
    $contents = file_get_contents(__DIR__ . "/" . $_GET["f"]);
} else {

    /*
        �ǂݍ��܂�Ă���t�@�C��������A�Ώۂ�scss�����肵�ăR���p�C������
        */
    $makeCss = true;
    $targetDirs = array();
    $filename = str_replace($requestUrlBaseDir, "", $_SERVER["REQUEST_URI"]);
    $filename = str_replace("?" . $_SERVER['QUERY_STRING'], "", $filename);

    $size = str_replace(".css", "", $filename);//0-,600-1000
    //echo $targetDir;
    //echo $size;exit;
    foreach ($scssSorceDirs as $key => $scssDir) {
        $targetDirs[] = $scssDir . "/include";
        $targetDirs[] = $scssDir;
        $targetDirs[] = $scssDir . "/" . $size;
    }
    //print_r($targetDirs);exit;
    foreach ($targetDirs as $kd => $targetDir) {
        $scsss = array();
        if (is_dir($targetDir)) {
            if ($handle = opendir($targetDir)) {
                while (($file = readdir($handle)) !== false) {
                    if ($file != "." && $file != "..") {

                        $fullPath = $targetDir . "/" . $file;

                        //echo "\n\n"."fullPath:".$fullPath."\n";


                        if (strpos($fullPath, "/$size/") !== false) {

                            //�f�B���N�g�����Ń}�b�`����p�^�[��
                            //echo "@@@@@@@@@@@@@@@@@@@ OK"."\n";
                            $scsss[] = $fullPath;

                        } elseif (strpos($fullPath, "/include/") !== false) {

                            //include�f�B���N�g���͕K���ǂݍ���
                            $scsss[] = $fullPath;

                        } elseif (strpos($fullPath, ".$size.") !== false) {

                            //�t�@�C�����Ń}�b�`����p�^�[��
                            //echo "################# OK"."\n";
                            $scsss[] = $fullPath;

                        }

                    }
                }
                closedir($handle);
            }
        }
        sort($scsss);
        //print_r($scsss);exit;
        for ($i = 0; $i < count($scsss); $i++) {
            $contents .= "/* --- ";
            $contents .= "source : " . str_replace($_SERVER["DOCUMENT_ROOT"], "", $scsss[$i]);
            $contents .= " --- */" . "\n";
            $contents .= '@import "' . $scsss[$i] . '";' . "\n";
        }
    }
}
//echo "aaa";exit;
//echo $contents;exit;

include $scssLibPath;

use Leafo\ScssPhp\Compiler;


header("Content-type: text/css");

if ($contents) {

    //use Leafo\ScssPhp\Compiler;

    $scss = new Leafo\ScssPhp\Compiler();
    //$scss->setImportPaths(__DIR__."/".$_GET["f"]);


    $scss->setFormatter("Leafo\ScssPhp\Formatter\Expanded");
    // will search for 'assets/stylesheets/mixins.scss'
    $str = $scss->compile($contents);


    if (!@$_GET["f"]) {
        $target = __DIR__ . "/" . $filename;
        $fp = fopen($filename, "w");
        fwrite($fp, $str);
        fclose($fp);
    }


    echo $str;

}
