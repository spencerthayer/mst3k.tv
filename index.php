<?php
    require_once("database.php");
    require_once("functions.php");
    ?>
<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?/* META */?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <?/* SOCIAL SHARE */?>
        <meta property="og:site_name"content="<?=$title; ?>" />
        <meta property="og:image" content="<?=$URLpath;?>img/play-mst3k.png" />
        <meta property="og:url" content="<?=$URLpath;?>" />
    <?/* MOBILE SETTINGS */?>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title>MST3K.tv Deep Hurting 24/7</title>
        <link rel="apple-touch-icon" sizes="144x144" href="<?=$php_resize."favicon".".png"."&w=144&h=144&zc=0";?>"/>
        <link rel="apple-touch-icon" sizes="114x114" href="<?=$php_resize."favicon".".png"."&w=114&h=114&zc=0";?>"/>
        <link rel="apple-touch-icon" sizes="72x72" href="<?=$php_resize."favicon".".png"."&w=72&h=72&zc=0";?>"/>
        <link rel="apple-touch-icon" href="<?=$php_resize."favicon".".png"."&w=64&h=64&zc=0";?>"/>
        <link rel="shortcut icon" href="<?=$php_resize."favicon".".png"."&w=32&h=32&zc=0";?>"/>
    <?/* CSS */?>
        <link rel="stylesheet" href="/css/css.php"/>
        <link rel="stylesheet" href="/css/elusive-webfont.css"/>
    <?/* JAVASCRIPT */?>
        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <!--<script type="text/javascript" src="//raw.githubusercontent.com/ustream/embedapi/master/src/ustream-embedapi.js"></script>-->
        <script type="text/javascript" src="/js/ratio.js"></script>
        <!--script type="text/javascript" src="/js/menu.js"></script-->
        <script type="text/javascript" src="/js/script.php"></script>
        <!-- bootstrap -->
        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/> -->
        <!-- <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

</head>
<body class="blur">
    <div class="logo" id="logo">
        <ul id="nav">
            <li>
                <a href="/" title="Home">
                    <img src="<?=$php_resize."favicon".".png"."&w=32&h=32&zc=0";?>" />
                </a>
                <ul>
                <?php
                    $csvFile = "https://docs.google.com/spreadsheets/d/1MS3prMvRYmXdtddS-RAt2g6zv6X_JJv3Zhgb2fsPA4c/pub?output=csv";
                    $file_handle = fopen($csvFile, "r");
                    $i = 0;
                    while (!feof($file_handle) ) {
                        $i++;
                        $lot = fgetcsv($file_handle, 1024);
                        if ($lot[1]=="yes") {
                            echo "<li><a href=\"/".$lot[2]."\">".$lot[3]."</a></li>";
                        }
                    }
                ?>
                </ul>
            </li>
        </ul>
    </div>
    <?/**/?><div id="darkness"></div><?/**/?>
    <?php if($is_dev): ?><div class="browsersize">BROWSER SIZE: <strong><span id="width">W</span></strong>x<strong><span id="height">H</span></strong></div><?php endif; ?>
    <?/**/?>
    </div>
    <?/* PLAYER */?>
    <div class="left">
        <?php if ($iPod||$iPhone) : ?>
        <a href="<?=$field_ios_stream;?>"><div style="position:absolute;top:0;left:0;width:100%height:100%;"></div></a>
        <?php endif; ?>
        <div class="video" id="video">
        <?/**/?>
            <iframe
              src="<?=$embed_url;?>"
              width="100%"
              height="100%"
              scrolling="no"
              frameborder="0"
              class="stream"
              name="stream"
              id="stream"
              style="border: 0 none transparent;"
              allowfullscreen
              webkitallowfullscreen
            ></iframe>
        </div>
    </div>
    <?/**/?>
    <div class="right">
            <?/* CONTROLS */?>
            <div class="btn-group">
                <a class="btn" onclick="javascript:document.documentElement.webkitRequestFullScreen();" title="Fullscreen"><i class="icon-fullscreen"></i></a>
                <a class="btn" id="lights" title="Turn down your lights (where applicable)!"><i class="icon-idea"></i></a>
                <a class="btn" id="reload" title="Reload Stream" onclick="reload();"><i class="icon-repeat-alt"></i></a>
                <a class="btn" id="video-toggle" href="javascript:void(0);" rel="<?=$embed_url;?>" target="_blank" title="Popout Video"><i class="icon-video"></i></a>
                <a class="btn" id="chat-toggle" href="javascript:void(0);" rel="<?=$field_chat_url;?>" target="_blank" title="Popout Chat"><i class="icon-comment"></i></a>
                <? if ($embedVal == NULL || $embedVal == "?me") : ?>
                <a class="btn" href="<?=$fieldSchedule;?>" target="_blank" title="Show Schedule"><i class="icon-calendar"></i></a>
                <a class="btn" href="<?=$stream_url;?>" target="_blank" title="Stream URL"><i class="icon-network"></i></a>
                <? endif; ?>
            </div>
            <div class="clearfix"></div>
            <?/* 728x90 AD * /?>
            <div class="watchonvimeo">
                <a href="<?=$vimeo_track;?>" target="_blank"><img src="<?=$php_resize."MST3KlongVimeo".".jpg"."&w=720&h=90&zc=100";?>" alt="The official home of MST3K is on Vimeo!"  class="img-responsive" /></a>
            </div>
            <?/* CHAT */?>
            <iframe src="<?=$field_chat_url;?>" name="chat" class="chat" id="chat"></iframe>
            <?/**/?>
    </div>
    <?/**/?>
    <?/* CREDIT */?>
        <div class="bottom madeby" id="madeby">
              <p><small>
                MST3K.tv a project
              <span class="nobr">
                by <a href="http://spencerthayer.com">Spencer Thayer</a> N&copy!<?=date("Y");?>.
              </span>
              Stream provided by
              <span class="nobr"><a href="https://twitter.com/Syntheaux" target="_blank">@Syntheaux</a></span>!
              </small></p>
        </div>
    <?/**/?>
    <?/* GOOGLE */?>
        <?php if(!$is_dev){include "googleanalytics.php";} ?>
    <?/**/?>
</body>
</html>
