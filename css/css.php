<?php
  header("Content-type: text/css; charset: UTF-8");
  require_once("../database.php");
?>
@import url("//fonts.googleapis.com/css?family=Lato:400,700");
html {
  width: 100%;
  height: 100%;
}

body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  background-color: <?=$background;?>;
  color: <?=$fontColor;?>;
  font-size: 12px;
  font-family: "Lato", sans-serif;
}
h1 { font-size: 180%; line-height: 120%; font-weight: 100; text-shadow: 0 1px 1px <?=$linkAction;?>; }
h2 { font-size: 160%; line-height: 120%; font-weight: 900; text-shadow: 0 1px 1px <?=$linkAction;?>; }
h3 { font-size: 140%; line-height: 120%; font-weight: 400; text-shadow: 0 1px 1px <?=$linkAction;?>; }
h4 { font-size: 120%; line-height: 120%; text-shadow: 0 1px 1px <?=$linkAction;?>; }
h5 { font-size: 100%; line-height: 120%; text-shadow: 0 1px 1px <?=$linkAction;?>; }
h6 { font-size: 80%; line-height: 120%; text-shadow: 0 1px 1px <?=$linkAction;?>; }
p { font-size: 100%; text-shadow: 0 1px 1px <?=$linkAction;?>; }
p small { font-size: 80%; text-shadow: 0 1px 1px <?=$linkAction;?>; }
.nobr { white-space: nowrap; }
a {
  color: <?=$linkDefault;?>;
  transition: opacity .2s;
}
a:hover {
  color: <?=$linkAction;?>;
  text-decoration: none;
  opacity: .8;
}
img {
    border: 0px none transparent;
    vertical-align: middle;
    }
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
    display: block;
    width: 100% \9;
    max-width: 100%;
    height: auto;
}
.top {
  height:30px;
}
.left {
    z-index:101;
}
.bottom{
  position: fixed;
  bottom: 0;
  right: 0;
  left: 0;
}
@media(min-width: 800px) and (max-width: 1920px) {
    html, body {
        overflow: hidden;
        }
    .right {
      position: absolute;
      top: 0;
      right: 0;
      height: 100%;
      max-height: 100%;
    }
    .left {
      position: relative;
      top: 0;
      left: 0;
      height: 100%;
      max-height: 100%;
    }
}
@media(min-width: 1920px) {
    .right { width: 500px; }
    .left { margin-right: 500px; }
    .chat {
      <?$n0=(32+63)."px";?>
      height: -moz-calc(100% - <?=$n0;?>);
      height: -webkit-calc(100% - <?=$n0;?>);
      height: calc(100% - <?=$n0;?>);
    }
}
@media(min-width: 1650px) and (max-width: 1919px) {
    .right { width: 500px; }
    .left { margin-right: 500px; }
    .chat {
      <?$n1=(32+63)."px";?>
      height: -moz-calc(100% - <?=$n1;?>);
      height: -webkit-calc(100% - <?=$n1;?>);
      height: calc(100% - <?=$n1;?>);
    }
}
@media(min-width: 1300px) and (max-width: 1649px) {
    .right { width: 400px; }
    .left { margin-right: 400px; }
    .chat {
      <?$n2=(32+50)."px";?>
      height: -moz-calc(100% - <?=$n2;?>);
      height: -webkit-calc(100% - <?=$n2;?>);
      height: calc(100% - <?=$n2;?>);
    }
}
@media(min-width: 800px) and (max-width: 1299px) {
    .right { width: 300px; }
    .left { margin-right: 300px; }
    .chat {
      <?$n3=(32+38)."px";?>
      height: -moz-calc(100% - <?=$n3;?>);
      height: -webkit-calc(100% - <?=$n3;?>);
      height: calc(100% - <?=$n3;?>);
    }
}
@media(min-width: 0px) and (max-width: 799px) {
    .chat {
        height: 100%;
        margin-bottom: 16px !important;
        }
    .right {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        max-height: 100%;
        }
    .left {
        position: relative;
        top: 0;
        left: 0;
        margin: 0;
        width: 100%;
        height: 100%;
        max-height: 100%;
        }
    .bottom {
        overflow: scroll;
        }
}
iframe {
    border: 0px none transparent;
}
.video {
    margin: 0;
    padding: 0;
    max-width: 100%;
    width: 100%;
    max-height: 100%;
    height: 100%;
    border: 0px none transparent;
}
.chat {
    margin: 0;
    padding: 0;
    max-width: 100%;
    width: 100%;
    max-height: 100%;
    border: 0px none transparent;
}
.watchonvimeo img {
    margin: auto;
    text-align: center;
    max-width: 720px;
    width:100%;
}
.browsersize {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 2px 4px;
  font-family: monospace;
  font-size: 10px;
  line-height: 10px;
  text-align: center;
  color: <?=$fontColor;?>;
  background-color: <?=$background;?>;
  z-index: 10000;
}
/* Credits */
.madeby {
    z-index: 102;
}
.madeby p {
    margin: 0 auto;
    white-space: nowrap;
}
.icons img {
  vertical-align: middle;
}
.clearfix { clear:both; }
/* Buttons */
.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
border-radius: 0;
}
.btn-group .btn+.btn, .btn-group .btn+.btn-group, .btn-group .btn-group+.btn, .btn-group .btn-group+.btn-group {
    margin-left: -1px;
}
.btn-group>.btn, .btn-group-vertical>.btn {
    position: relative;
    float: left;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
a {
    color: <?=$linkDefault;?>;
    text-decoration: none;
}
a {
    background: 0 0;
}
/* Lights */
#lights {
    z-index:101;
}
#darkness {
    position: absolute;
    left: 0; right: 0; top: 0; bottom: 0;
    height: 100%; width: 100%;
    z-index: 100;
    display: none;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyYWRpYWxHcmFkaWVudCBpZD0iZyI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSJyZ2JhKDAsIDAsIDAsIDAuNCkiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9InJnYmEoMCwgMCwgMCwgMC45KSIvPjwvcmFkaWFsR3JhZGllbnQ+PHJlY3QgeD0iMCUiIHk9IjAlIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2JhKDAsIDAsIDAsIDAuOSkiIC8+PHJlY3QgeD0iLTExLjMyMTYlIiB5PSItMTQwJSIgd2lkdGg9IjEyMi42NDMyJSIgaGVpZ2h0PSIyNDAlIiBmaWxsPSJ1cmwoI2cpIiAvPjwvc3ZnPg==);
    background-image: -webkit-gradient(radial, 50% -20%, 0, 50% -20%, 139, color-stop(0%, rgba(0, 0, 0, 0.5)), color-stop(100%, rgba(0, 0, 0, 1)));
    background-image: -webkit-radial-gradient(center -20%, farthest-side circle, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 1) 100%);
    background-image: -moz-radial-gradient(center -20%, farthest-side circle, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 1) 100%);
    background-image: -ms-radial-gradient(center -20%, farthest-side circle, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 1) 100%);
    background-image: -o-radial-gradient(center -20%, farthest-side circle, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 1) 100%);
    background-image: radial-gradient(farthest-side circle at center -20%, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 1) 100%);
    }
/* Logo */
.logo {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 102;
}
.logo img { /*cursor:wait;*/ }
.ios {
  font-size: 28px;
  margin:16px 0;
  display: block !important;
  clear: both !important;  
}
.clear {
  display: block !important;
  clear: both !important;
}

/* Poll Question */
#OPP-poll-id-52c33f2ae4b01752c427ce65 {
    width:100% !important;
}
#OPP-div-around-poll {
    background: none !important;
}
#OPP-poll-question-text {
    color: #FFFFFF !important;
}
#OPP-powered-by { display: none !important; }