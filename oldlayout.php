<?php require_once("database.php"); ?>
<?php //if ($iPod||$iPhone) { header("Location: ".$field_ios_stream); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <?/* SOCIAL SHARE */?>
        <meta property="og:site_name"content="<?=$head_title; ?>" />
        <meta property="og:image" content="<?=$URLpath;?>img/play-mst3k.png" />
        <meta property="og:url" content="<?=$URLpath;?>" />    
    <?/* MOBILE SETTINGS */?>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title><?=$head_title; ?></title>
        <link rel="apple-touch-icon" sizes="144x144" href="<?=$php_resize."favicon".".png"."&w=144&h=144&zc=0";?>"/>
        <link rel="apple-touch-icon" sizes="114x114" href="<?=$php_resize."favicon".".png"."&w=114&h=114&zc=0";?>"/>
        <link rel="apple-touch-icon" sizes="72x72" href="<?=$php_resize."favicon".".png"."&w=72&h=72&zc=0";?>"/>
        <link rel="apple-touch-icon" href="<?=$php_resize."favicon".".png"."&w=64&h=64&zc=0";?>"/>
        <link rel="shortcut icon" href="<?=$php_resize."favicon".".png"."&w=32&h=32&zc=0";?>"/>
    <?/* CSS */?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/css/fixes.css"/>
        <link rel="stylesheet" href="/css/elusive-webfont.css"/>
        <!--[if lte IE 7] ><script src="assets/elusive-font/lte-ie7.js"></script><![endif]-->
        <!--[if lt IE 9]><script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->    
    <?/* JAVASCRIPT */?>
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script><link rel="stylesheet" href="/css/style.css">
    <?/** /?>
        <script type="text/javascript" src="/js/jquery.fittext.js"></script>
        <script type="text/javascript" src="/js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="/js/manlyname.js"></script>
    <?/**/?>
        <script type="text/javascript" src="/js/functions.js"></script>
        <script type="text/javascript" src="http://static-cdn1.ustream.tv/js/libs/ustream-embedapi.js"></script>
    <?/** /?>
    <script>window.scrollback = {room:"mst3ktv",form:"canvas",theme:"dark",nick:"<?=$nickname;?>",minimize:false,showrooms:false,showthreads:false,showinfo:false,showpeople:false,showsearch:false,alertSound:false,alertTitle:false,createRoom:false};(function(d,s,h,e){e=d.createElement(s);e.async=1;e.src=(location.protocol === "https:" ? "https:" : "http:") + "//scrollback.io/client.min.js";d.getElementsByTagName(s)[0].parentNode.appendChild(e);}(document,"script"));</script>
    <?/**/?>
        <script type='text/javascript'>//<![CDATA[ 
            $(window).load(function(){
                    var channelOffline = function(){
                        alert("Channel is offline");
                    }
                    var channelLive = function(){
                        //alert("Channel is live");
                        //viewer.callMethod('play');
                    }
                    var channelFinished = function(){
                        //alert("Channel video finished.");
                    }
                    var viewer = UstreamEmbed('video');
                        console.log( viewer );
                        viewer.callMethod('load', 'channel', 16843506);
                        viewer.addListener('finished', channelFinished);
                        viewer.addListener('live', channelLive);
                        viewer.addListener('offline', channelOffline);
                }
            );
        //]]></script>
</head>
        <body class="blur"><div id="darkness"></div>
        <?php if($is_dev): ?><div style="position:absolute;top:0;left:0;margin: 0 auto;padding:2px;font-size:10px;line-height:12px;text-align:center;background-color:#444;z-index:10000;">BROWSER SIZE: <span id="width">Resize to find out!</span>x<span id="height">Resize to find out!</span></div><?php endif; ?>
        <? //div class="row fixsides" ?>
        <?/* PLAYER */?>
            <? if ($field_embed_type=="Ustream") { ?>
                <?/** /?><script>$(document).ready(function(){ $("#stream").fitVids(); });</script><?/**/?>
                <div class="col-md-9 center nopad stream" id="stream">
                    <iframe
                    src="<?=$field_embed_url;?>"
                    width="100%"
                    height="100%" 
                    scrolling="no"
                    frameborder="0"
                    style="border: 0px none transparent;"
                    id="video"
                    ></iframe>
                </div>
            <?php } ?>
        <?/**/?>
        <?/* CONTROLS */?>
        <div class="col-md-3 nopad">
          <div class="btn-toolbar">
            <div class="btn-group center clearfix">
              <a class="btn" id="lights"><i class="icon-idea"></i> Lights</a>
              <a class="btn" id="video-toggle" href="javascript:void(0);" rel="<?=$field_embed_url;?>" target="_blank"><i class="icon-video"></i> Popout</a>
              <a class="btn" id="chat-toggle" href="javascript:void(0);" rel="<?=$field_chat_url;?>"><i class="icon-comment"></i> Chat</a>
              <a class="btn" href="<?=$field_schedule_url;?>"  target="_blank"><i class="icon-calendar"></i> Schedule</a>
            </div>
          </div>
        </div>
        <?/* ADS */?>
        <div class="col-md-9 center nopad adbanner">
            <a href="<?=$vimeo_track;?>" target="_blank"><img src="/img/MST3Kxw-728x90.jpg" alt="The official home of MST3K is on Vimeo!"  class="center img-responsive" style="border:none;" /></a>
        </div>
        <div class="col-md-3 center nopad adbox" id="vimeoMST3K">
            <?php require_once("vimeo-ad.php"); ?>
        </div>
        <?/* CHAT */?>
        <div class="col-md-3 chat center nopad">
            <iframe src="<?=$field_chat_url;?>" name="chatFrame" style="border:0; width:100%; height:100%;"></iframe>
        </div>
        <?/* CREDIT * /?>
        <div class="credits">
                <div class="container">
                        <div class="madeby" style="float:left; margin-right:12px;"><p>MST3K.tv a project <span class="nobr">by <a href="http://spencerthayer.com">Spencer Thayer</a> N&copy!<?=date("Y");?>.</span> Stream provided by <span class="nobr"><a href="https://twitter.com/Syntheaux" target="_blank">@Syntheaux</a></span>!</p></div>
                        <?/** /?>
                        <div class="beta" style="float:left;">
                                <span class="label label-important">BETA v0.9</span>
                                <span class="nobr">Tested in:
                                <img src="<?=$php_resize."Firefox".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Mozilla Firefox">
                                <img src="<?=$php_resize."Chrome".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Google Chrome">
                                <img src="<?=$php_resize."Safari".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Apple Safari">
                                <img src="<?=$php_resize."IE".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Internet Explorer" class="nosupport">
                                <img src="<?=$php_resize."Opera".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Opera">
                                <img src="<?=$php_resize."Android".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Android Browser">
                                <img src="<?=$php_resize."IOS".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Apple IOS Browser"></span>
                        </div>
                        <?/** /?>
                </div>
        </div>
        <?/**/?>
        <?/* GOOGLE */?>
            <?php if($is_me){ }elseif(!$is_dev){include "googleanalytics.php";} ?>
        <?/**/?>
</body>
</html>
            <?/** /?>
                <?php if ($iPod||$iPhone) { ?>
                <div class="col-md-9 center nopad">
                    <a href="<?=$field_ios_stream;?>"><br/><img src="<?=$php_resize."play-mst3k".".png"."&w=430&h=285&zc=0";?>"  class="center img-responsive" border="0"/></a>
                </div>
            <?php } else
            <?/**/?>
<?/* POLL * /?>
            <div class="col-md-3 center nopad">
                <div class="col-md-4"><?=$field_poll;?></div>
            </div>
    <?/* ADS */?>
        <?/*div class="schedule span4">
          <?=$field_schedule;?>
        </div*/?>