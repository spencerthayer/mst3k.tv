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
    $is_dev = (strpos($_SERVER[ 'SERVER_NAME' ], "dev.mst3k.tv") !== false);
    $is_me = (strpos($_SERVER['REQUEST_URI'],"?me") !== false);
    $url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $URLpath = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $head_title = "MST3K.tv Deep Hurting 24/7";
    $php_resize = "/image/?src=/img/";
    $field_embed_type = "Ustream";
    $field_stream_url = "http://www.ustream.tv/channel/mystery-science-theater-3000---mst3k";
    $field_embed_value = "16843506";
    $field_ios_stream = "http://iphone-streaming.ustream.tv/ustreamVideo/".$field_embed_value."/streams/live/playlist.m3u8";
    $field_embed_url =  "http://www.ustream.tv/embed/".
                                    $field_embed_value.
                                    "?v=3".
                                    "&lite=true".
                                    "&longpoll=true".
                                    "&wmode=direct".
                                    "&controls=true".
                                    "&showtitle=false".
                                    "&autoplay=false".
                                    "&autoResize=true".
                                    "&enablejsapi=true".
                                    "&quality=best".
                                    "&volume=100".
                                    "&locale=en_US".
                                    "&referrer=mst3ktv".
                                    "";
    //$field_chat_url = "https://kiwiirc.com/client/irc.chat4all.org/?nick=".$nickname."&theme=mini#d13_canabian";
    $field_chat_url = "http://talk.mst3k.tv/";
    $field_schedule_url = "https://dl.dropboxusercontent.com/u/41307259/schedule.html";
    //$field_schedule = file_get_contents($field_schedule_url);
    $field_poll_url = "http://69.119.203.242:50161/moviepoll.html";
    //$field_poll = file_get_contents($field_poll_url);
?>