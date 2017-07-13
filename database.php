<?php
    define("ROOT",getcwd());
    $rootPath = $_SERVER["DOCUMENT_ROOT"];
    $dirpath = dirname(dirname(__FILE__));
    $isHTTPS = TRUE;
    $protocol = "https://";
    $hostname = $protocol.$_SERVER["HTTP_HOST"];
    $domain = $hostname;
    $uri = $_SERVER['REQUEST_URI'];
    $url = $hostname.$uri;
    $shareURL = $domain."/";
    $textURL = $shareURL."%23".$i;
    $parseURL= parse_url($url, PHP_URL_PATH);
    $uriPath = explode("/", trim($parseURL, "/"));
    $dateTime = date_create();
    $cachebuster = date_timestamp_get($dateTime);
    // MAIN CHANNEL VARIABLES
    $title = "MST3K.tv Deep Hurting 24/7";
    $php_resize = "/image/?src=/img/";
    $description = "";
    $appid = "";
    $shareIMG = $hostname."/img/play-mst3k.png";
    $hashtags = "MST3K,mystery science theater 3000,movie";
    $fontColor      = "#fff";
    $background     = "#000";
    $linkDefault    = "#2196F3";
    $linkAction     = "#1976d2";
    $vimeo_track ="https://vimeo.com/ondemand/mst3k?utm_source=mst3ktv_link&utm_medium=affiliate&utm_campaign=mst3ktv";
?>
