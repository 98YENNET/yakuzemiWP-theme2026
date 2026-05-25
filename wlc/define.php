<?php
$wlcConifg = "/mnt/landiskgx/htdocs/ctrl/config/config.php";
if (@is_file($wlcConifg)) {
    define("WWP_MODE", "staging");
} else {
    define("WWP_MODE", "production");
}
if (WWP_MODE == "staging") {
    if (defined("WWP_STAGING_CONV_PATH")) {
        define("WWP_CONV_PATH", WWP_STAGING_CONV_PATH);
    }
} else {
    if (defined("WWP_PRODUCTION_CONV_PATH")) {
        define("WWP_CONV_PATH", WWP_PRODUCTION_CONV_PATH);
    }
}
if (!defined("WWP_CONV_PATH")) {
    define("WWP_CONV_PATH", "");
}


define("WWP_THEME_PATH", realpath(dirname(__FILE__) . "/../"));
define("WWP_WWP_PATH", dirname(__FILE__));
define("WWP_SYSTEM_PATH", realpath(dirname(__FILE__) . "/../system/"));
define("WWP_TEMPLATE_PATH", realpath(WWP_SYSTEM_PATH . "/templates"));
define("WWP_CLASS_PATH", realpath(WWP_WWP_PATH . "/classes"));
define("WWP_MODULE_PATH", realpath(WWP_SYSTEM_PATH . "/modules"));
define("WWP_CONTENT_PATH", realpath(WWP_SYSTEM_PATH . "/contents"));
define("WWP_THEME_URI", get_stylesheet_directory_uri());
define("WWP_UPLOADA_URI", WWP_THEME_URI . "/uploads");
define("WWP_URL", site_url());
define("WWP_CONV_URL", WWP_URL . WWP_CONV_PATH);


global $WWP_REPLACES;
$WWP_REPLACES = array(
    "WWP_THEME_PATH" => WWP_THEME_PATH,
    "WWP_THEME_URI" => WWP_THEME_URI,
    "WWP_UPLOADA_URI" => WWP_UPLOADA_URI,
    "WWP_URL" => WWP_URL,
    "WWP_CONV_PATH" => WWP_CONV_PATH,
    "WWP_CONV_URL" => WWP_CONV_URL,
);