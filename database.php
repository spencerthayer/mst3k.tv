<?php
    require "nickname.php";
    //if (strpos($_SERVER['REQUEST_URI'],"?XXX") == true) {}
    //if (isset($_SERVER['HTTP_USER_AGENT'])) { $agent = $_SERVER['HTTP_USER_AGENT']; }
    //Detect special conditions devices
    $Firefox = stristr($_SERVER['HTTP_USER_AGENT'],"Firefox");
    $iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
    $webOS = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
    //do something with this information
    if( $iPod || $iPhone ){
        //browser reported as an iPhone/iPod touch -- do something here
    }else if($iPad){
        //browser reported as an iPad -- do something here
    }else if($Android){
        //browser reported as an Android device -- do something here
    }else if($webOS){
        //browser reported as a webOS device -- do something here
    }
    // URL PATHS
    $is_dev = (strpos($_SERVER[ 'SERVER_NAME' ], "dev.mst3k.tv") !== false);
    $is_me = (strpos($_SERVER['REQUEST_URI'],"?me") !== false);
    $is_oldchat = (strpos($_SERVER['REQUEST_URI'],"?oldchat") !== false);
    $url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $URLpath = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $paths = explode('/', $URLpath);
    $embedVal = $paths[3];
    $chatVal = $paths[4];
    // MAIN CHANNEL VARIABLES
    $head_title = "MST3K.tv Deep Hurting 24/7";
    $php_resize = "/image/?src=/img/";
    // $field_embed_type = "Ustream";
    $field_stream_url = "http://www.ustream.tv/channel/mystery-science-theater-3000---mst3k";
    if ($embedVal == NULL) {
        $field_embed_value = "16843506";
    } else {
        $field_embed_value = $embedVal;
    }
    if ($chatVal == NULL) {
        $field_irc_value = "ircsynth";
    } else {
        $field_irc_value = $chatVal;
    }
    $field_ios_stream = "http://iphone-streaming.ustream.tv/ustreamVideo/".$field_embed_value."/streams/live/playlist.m3u8";
    $field_embed_url = "http://www.ustream.tv/embed/".$field_embed_value."?html5ui&autoplay=true&controls=true&showtitle=false&quality=best";
    $field_chat_url = "http://deep13.us/".$field_irc_value;
    $field_schedule_url = "https://dl.dropboxusercontent.com/u/41307259/schedule.html";
    // VIMEO AD
    $vimeo_track ="https://vimeo.com/ondemand/mst3k?utm_source=mst3ktv_link&utm_medium=affiliate&utm_campaign=mst3ktv";
    $vimeo_url =
        "http://player.vimeo.com/video/".
        "106403554".
        "?".
        "utm_source=mst3ktv_embed".
        "&utm_medium=affiliate".
        "&utm_campaign=mst3ktv".
        "&title=0".
        "&byline=0".
        "&portrait=0".
        "autoplay=true".
        "";
    $vimeo_iframe = "<iframe name='videoTrends' src='".$vimeo_url."' width='100%' height='100%' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>";
    // CSS
    $fontColor      = "#fff";
    $background     = "#000";
    $linkDefault    = "#428BCA";
    $linkAction     = "#3B6384";
?>
<?
/*
$field_embed_url =  "http://www.ustream.tv/embed/".
                                $field_embed_value.
                                // "?v=3".
                                "&lite=true".
                                "&longpoll=true".
                                "&wmode=direct".
                                "&controls=true".
                                "&showtitle=false".
                                "&autoplay=true".
                                "&autoResize=true".
                                "&enablejsapi=true".
                                "&quality=best".
                                "&volume=100".
                                "&locale=en_US".
                                "&referrer=mst3ktv".
                                "";
*/
/* <iframe width="480" height="270" src="http://www.ustream.tv/embed/16843506?html5ui" allowfullscreen webkitallowfullscreen scrolling="no" frameborder="0" style="border: 0 none transparent;"></iframe> */
?>
