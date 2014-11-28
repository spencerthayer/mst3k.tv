<?php
require "../database.php";
?>
<?php //require "../nickname.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Big McLarge Huge Name Generator</title>
    <?/**/?><link rel="stylesheet" href="style.css" media="screen" type="text/css" /><?/**/?>
    <?/**/?>
    <style type="text/css">
        .chrome.gradient:before {
            content: "<?=$nameStart;?>";
            }
    </style>
    <?/** /?>
    <script type="text/javascript">
        if ( navigator.platform.indexOf('Win') != -1 ) {
            window.document.getElementById("wrapper").setAttribute("class", "windows");
        } else if ( navigator.platform.indexOf('Mac') != -1 ) {
            window.document.getElementById("wrapper").setAttribute("class", "mac");
        }
    </script>
    <?/**/?>
    <script src=//modernizr.com/downloads/modernizr-latest.js "></script>
    <script>
      Modernizr.addTest('backgroundclip',function() {
    
        var div = document.createElement('div');
    
        if ('backgroundClip' in div.style)
          return true;
    
        'Webkit Moz O ms Khtml'.replace(/([A-Za-z]*)/g,function(val) { 
          if (val+'BackgroundClip' in div.style) return true;
        });
    
      });
    </script>
</head>
<body>
    <div class="background"></div>
    <div id="wrapper">
        <h1 class="chrome<? if($Firefox){print" firefox";}else{print" gradient";} ?>"><?=$nameStart;?></h1>
        <h1 class="victory<? if($Firefox){print" firefox";}else{print" gradient";} ?>"><?=$nameEnd;?></h1>
        <? if($Firefox): ?><h2 style="z-index: 100;position: fixed;top:0;left:0;">Sorry but this page is not showing you all the glory of the Big McLargehuge name generator. Please use Safari, Chrome, Opera or Internet Explorer. The reason this awesomeness will not work with Firefox is because the non-profit entity refuses to advance the Internet and adopt Webkit compatible coding standards. There is nothing I can do. I am truely sorry.</h2><? endif; ?>
    </div>
<div class="footer">
    <a href=".">REFRESH</a> FOR MORE NAMES OR VISIT <a href="/">MST3K.tv</a> TO WATCH STREAMING EPISODES!
</div>
<div class="ad">
    <a href="<?=$vimeo_track;?>" target="_blank"><img src="/img/MST3Kxw-728x90.jpg" alt="The official home of MST3K is on Vimeo!"  class="center img-responsive" style="border:none;" /></a>
</div>
    <?/* GOOGLE */?>
        <?php if($is_me){ }elseif(!$is_dev){include "../googleanalytics.php";} ?>
    <?/**/?>
</body>
</html>
<?/** /?>
    <h1 class="chrome"><?=$nameStart;?></h1>
    <h3 class="dreams"><?=$nameEnd;?></h3>
<?/** /?>
    <h1 class="vectro">
        <span class="vectro-body"><?=$name;?></span>
        <span class="vectro-red">I</span>
        <span class="vectro-green">I</span>
        <span class="vectro-blue">I</span>
    </h1>
<?/** /?>
    <div class="street-machine">
        <h1 class="street"><?=$nameStart;?></h1>
        <h3 class="machine"><?=$nameEnd;?></h3>
    </div>
<?/** /?>
    <h1 class="victory">
        <?=$nameStart;?>
        <?=$nameEnd;?>
    </h1>
<?/** /?>
    <div class="future-cop">
        <h3 class="future"><?=$nameStart;?></h3>
        <h1 class="cop"><?=$nameEnd;?></h1>
    </div>
<?/**/?>
<? /* if ($Firefox) : ?>
    <div id="wrapper">
        <h4>YOUR RANDOM BIG MCLARGEHUGE NAME:</h4>
        <h1><?=$nameStart;?> <?=$nameEnd;?></h1>
        <h2>Sorry but this page is not showing you all the glory of the Big McLargehuge name generator. Please use Safari, Chrome, Opera or Internet Explorer. The reason this awesomeness will not work with Firefox is because the non-profit entity refuses to advance the Internet and adopt Webkit compatible coding standards. There is nothing I can do. I am truely sorry.</h2>
        <h3>On the plus side you can visit <a href="/">MST3K.tv</a> and stream MST3K episodes 24/7!</h3>
    </div>
<? endif; */?>