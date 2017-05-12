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
        <title><?=$title; ?></title>
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
                    <div class="buildOwn" style="background:#000;"><!-- http://jsfiddle.net/4M3q3/194/ -->
                      <h4>Build Your Own Stream</h4>
                      <div class="group" style="width:400px;">
                          <select id="buildOne" class="select">
                              <option value="u" selected>Ustream</option>
                              <option value="y">YouTube</option>
                              <!-- <option value="l">Livestream</option> -->
                              <option value="t">Twitch</option>
                          </select>
                          <input id="buildTwo" type="text" placeholder="Stream ID #">
                      <!-- </div>
                      <div class="group"> -->
                          <span class="addon">#</span>
                          <input id="buildThree" type="text" placeholder="Channel">
                          <a id="openStream" class="btn" style="color:#3388FF;">Open Stream</a>
                      </div>
                    </div>
                    <li><a href="/synth">Synth</a></li>
                    <li><a href="/moviesign">Movie Sign</a></li>
                    <li><a href="/avo">Just The Avocado</a></li>
                    <li><a href="/fletch">Fletch</a></li>
                    <li><a href="/thworldisyours">The World is Yours</a></li>
                    <li><a href="/twinbee">Twin Bee</a></li>
                    <li><a href="/holly">Holly</a></li>
                    <li><a href="/phunq">Phunq</a></li>
                    <li><a href="/snappu">Snappu</a></li>
                    <li><a href="/neysdower">Neysdower</a></li>
                    <li><a href="/canabian">Canabian</a></li>
                    <li><a href="/winter">Winter</a></li>
                    <li><a href="/jollyaustin">Jolly Austin</a></li>
                    <li><a href="/jp">JP Hammer</a></li>
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
        <?php if($is_me){ }elseif(!$is_dev){include "googleanalytics.php";} ?>
    <?/**/?>
</body>
</html>
