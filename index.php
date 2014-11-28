<?php require_once("database.php"); ?>
<?php //if ($iPod||$iPhone) { header("Location: ".$field_ios_stream); } ?>
<?/** /?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?/**/?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?/* META */?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <?/* SOCIAL SHARE */?>
        <meta property="og:site_name"content="<?=$head_title; ?>" />
        <meta property="og:image" content="<?=$URLpath;?>img/play-mst3k.png" />
        <meta property="og:url" content="<?=$URLpath;?>" />    
    <?/* MOBILE SETTINGS */?>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title><?=$head_title; ?></title>
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
        <script type="text/javascript" src="/js/script.js.php"></script>
    <?/*

    params.emoticonPath = "http://deep13.us/images/emoticons/";
    params.emoticonList = ":)->smile.gif,;)->wink.gif,:D->awesome.gif,>:P->madppbt.gif,:P->tongue.gif,xp->ppbt.gif,>:(->angry.gif,:(->sad.gif,:$->blush.gif,:0->onoes.gif,8|->hmf.gif,XD->xd.gif,:la:->la.gif,D:->D8.gif,:3->meow.gif,;D->semicolond.png,n_n->shiffy.png,<3->heart.png,:love:->love.gif,:lemon:->lemon.gif,:facepalm:->facepalm.gif,:hmm:->hmm.gif,:L->colonl.gif,:|->stare.gif,B)->sunglasses.gif,:zzz:->zzz.png,:goat:->goat.gif,:gert:->goat2.gif,:molko:->molko.gif,:[->creeper.gif,:tj:->chinny.gif,:chinny:->chinchilla.gif,:bat:->bat.gif,:mario:->Emoticon_mario.png,:joel:->joelhodgson.gif,:mike:->mike.png,:tom:->tomservo.gif,:crow:->crow.gif,:gypsy:->gypsy.gif,:brainguy:->brainguy2.png,:nanite:->nanite.png,:hippo:->hippo.gif,:mrt:->mr-t.gif,:kitteh:->cat.gif,:tick:->tick.png,:ae:->ae1.png,:fuae:->fuae.png,:torgo:->torgo.jpg,:nosprings:->coily.png,:mrb:->mrb.png,:itstinks:->itstinks.png,:tor:->tor.png,:iceicebaby:->ice.png,:tearingmeapaht:->tearingmeapart.png,:tnetennba:->moss.png,:sillywalk:->sillywalk.gif,:cthulhu:->cthulu.png,:k9:->k9.png,:greenguy:->h2g2.png,:wutchoo:->arnold.png,:rowr:->rowr.png,:toonces:->toonces.png,:jeff:->jeffg.png,_|oo->forklift.png,:kali:->kali.png,:spittake:->spittake.png,:batwaah:->batman.png,:colonel:->chestbridge.png";
    
    */?>
    <script>
        /**** /
        $(window).load(function() {
            var channelOffline = function() {
                alert("Channel is offline");
            }
            var channelLive = function() {
                //alert("Channel is live");
                viewer.callMethod("play");
            }
            var channelFinished = function() {
                //alert("Channel video finished.");
            }
            var viewer = UstreamEmbed("stream");
            console.log(viewer);
            viewer.callMethod("load", "channel", <?=$field_embed_value;?>);
            viewer.addListener("finished", channelFinished);
            viewer.addListener("live", channelLive);
            viewer.addListener("offline", channelOffline);
        });
        /****/
    </script>
</head>
<body class="blur">
    <div class="logo" id="logo">
        <img
            src="<?=$php_resize."favicon".".png"."&w=32&h=32&zc=0";?>"
            alt="Click to reload the stream!"
            title="Click to reload the stream!"
            onclick="reload();"
            />
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
              src="<?=$field_embed_url;?>"
              width="100%"
              height="100%"
              scrolling="no"
              frameborder="0"
              class="stream"
              name="stream"
              id="stream"
            ></iframe>
        <?/**/?>
        </div>
    </div>
    <?/**/?>
    <div class="right">
        <?/* CONTROLS */?>
            <div class="btn-group">                  
                <a class="btn" id="lights" title="Turn down your lights (where applicable)."><i class="icon-idea"></i></a>
                <a class="btn" onclick="javascript:document.documentElement.webkitRequestFullScreen();" title="Fullscreen"><i class="icon-fullscreen"></i></a>
                <a class="btn" id="video-toggle" href="javascript:void(0);" rel="<?=$field_embed_url;?>" target="_blank" title="Popout Video"><i class="icon-video"></i></a>
                <a class="btn" id="chat-toggle" href="javascript:void(0);" rel="<?=$field_chat_url;?>" target="_blank" title="Popout Chat"><i class="icon-comment"></i></a>
                <a class="btn" href="<?=$field_schedule_url;?>" target="_blank" title="Show Schedule"><i class="icon-calendar"></i></a>
                <a class="btn" href="<?=$field_stream_url;?>" target="_blank" title="Stream URL"><i class="icon-network"></i></a>
                
            </div>
            <div class="clearfix"></div>
        <?/* 728x90 AD */?>
            <div class="watchonvimeo">
                <a href="<?=$vimeo_track;?>" target="_blank"><img src="<?=$php_resize."MST3KlongVimeo".".jpg"."&w=720&h=90&zc=100";?>" alt="The official home of MST3K is on Vimeo!"  class="img-responsive" /></a>
            </div>
      <?/* CHAT */?>
            <iframe src="<?=$field_chat_url;?>" name="chat" class="chat" id="chat"></iframe>
      <?/**/?>
        <?/* 300x250 AD * /?>
            <div class="vimeo">
                <?php //require_once("vimeo-ad.php"); ?>
                <a href="<?=$vimeo_track;?>" target="_blank">
                    <img src="/img/MST3Kxw-300x250.jpg" alt="The official home of MST3K is on Vimeo!" style="border:none;" />
              </a>
            </div>
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
              <span class="nobr icons">
                <img src="<?=$php_resize."Firefox".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Mozilla Firefox">
                <img src="<?=$php_resize."Chrome".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Google Chrome">
                <img src="<?=$php_resize."Safari".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Apple Safari">
                <img src="<?=$php_resize."IE".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Internet Explorer" class="nosupport">
                <img src="<?=$php_resize."Opera".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Opera">
                <img src="<?=$php_resize."Android".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Android Browser">
                <img src="<?=$php_resize."IOS".".png"."&w=10&h=10&zc=0";?>" width="10" alt="Apple IOS Browser">
              </span>
              </small></p>
        </div>
    <?/**/?>
    <?/* GOOGLE */?>
        <?php if($is_me){ }elseif(!$is_dev){include "googleanalytics.php";} ?>
    <?/**/?>
</body>
</html>