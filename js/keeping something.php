

    $(document).ready(function() {
        /**VIDEO**/
            var videoWin;
            $('#video-toggle').click(function(){
            $('#video').fadeToggle(500);
            $('#video').detach();
            });
            $('#video-toggle').click(function(){
            if (videoWin && !videoWin.closed) {
            videoWin.close();
            return false;
            }
            videoWin = window.open(
            $(this).attr('rel'),
            'videoWin',
            'width=600,height=480,toolbar=0,top=0,left=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1');
            return false;
            }
            );
            var watchVideo = setInterval(function() {
            if (videoWin.closed) {clearTimeout(watchVideo);$('#video').show(500)}
            return false;
            }, 1);
        /****/
    });
        /** LIGHTS ** /
        $("#lights").click(function() {
            $("#darkness").fadeToggle(500);
        });
        $("#lights").toggle(function() {
            $("#lights").attr("id", "lightsoff");
        }, function() {
            $("#lightsoff").attr("id", "lights");
        });
        /****/
        /**CHAT**/
        var chatWin;
        $("#chat-toggle").click(function() {
            $("#chat").fadeToggle(500);
            $("#chat").detach();
        });
        $("#chat-toggle").click(function() {
            if (chatWin && !chatWin.closed) {
                chatWin.close();
                return false;
            }
            chatWin = window.open(
                $(this).attr("rel"),
                "chatWin",
                "width=320,height=480,toolbar=0,top=0,left=601,menubar=0,location=0,status=0,scrollbars=0,resizable=1");
            return false;
        });
        var watchChat = setInterval(function() {
            if (chatWin.closed) {
                clearTimeout(watchChat);
                $("#chat").show(500)
            }
            return false;
        }, 1);
        });
        /****/
        <?
        /**UStream Code** /
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
            var viewer = UstreamEmbed("video");
            console.log(viewer);
            viewer.callMethod("load", "channel", <?=$field_embed_value;?>);
            viewer.addListener("finished", channelFinished);
            viewer.addListener("live", channelLive);
            viewer.addListener("offline", channelOffline);
        });
        /****/
        ?>
        
        
        
        <?php
    header("Content-Type: application/x-javascript");
?>
    $(document).ready(function() {
          /** LIGHTS **/
          $('#lights').click(function(){$('#darkness').fadeToggle(500);});
          $("#lights").toggle(function(){$("#lights").attr('id','lightsoff');},function(){$("#lightsoff").attr('id','lights');});
          /**VIDEO**/
          var videoWin;
          $('#video-toggle').click(function(){
              $('#video').fadeToggle(500);
              $('#video').detach();
              });
          $('#video-toggle').click(function(){
              if (videoWin && !videoWin.closed) {
                videoWin.close();
                return false;
              }
              videoWin = window.open(
                $(this).attr('rel'),
                'videoWin',
                'width=600,height=480,toolbar=0,top=0,left=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1');
              return false;
              }
            );
          var watchVideo = setInterval(function() {
              if (videoWin.closed) {clearTimeout(watchVideo);$('#video').show(500)}
              return false;
           }, 1);
          
          /**CHAT**/
          var chatWin;
          $('#chat-toggle').click(function(){
              $('#chat').fadeToggle(500);
              /*$('#chat').detach();*/
              });
          $('#chat-toggle').click(function(){
              if (chatWin && !chatWin.closed) {
                chatWin.close();
                return false;
              }
              chatWin = window.open(
                $(this).attr('rel'),
                'chatWin',
                'width=320,height=480,toolbar=0,top=0,left=601,menubar=0,location=0,status=0,scrollbars=0,resizable=1');
              return false;
              }
            );
          var watchChat = setInterval(function() {
              if (chatWin.closed) {clearTimeout(watchChat);$('#chat').show(500)}
              return false;
           }, 1);
        });
// Video Aspect Ratio //
    $(window).load(function() {
            $(".left").keepRatio({ ratio: 4/3, calculate: "full" });
            $(".video").keepRatio({ ratio: 4/3, calculate: "full" });
            //$(window).on("resize", resizeEventHandler);
            //resizeEventHandler();
          });
          // Viewport Data //
          $(document).ready(function(e) {
            showViewportSize();    
          });
          $(window).resize(function(e) {
            showViewportSize();
          });
          function showViewportSize() {
            var the_width = $(window).width();
            var the_height = $(window).height();
            var the_width = document.body.clientWidth;
            var the_height = document.body.clientHeight;
            $('#width').text(the_width);
            $('#height').text(the_height);
        }
// UStream Code //
    $(window).load(function(){
            var channelOffline = function(){
                alert("Channel is offline");
            }
            var channelLive = function(){
                //alert("Channel is live");
                viewer.callMethod("play");
            }
            var channelFinished = function(){
                //alert("Channel video finished.");
            }
            var viewer = UstreamEmbed("video");
                console.log( viewer );
                viewer.callMethod("load", "channel", 16843506);
                viewer.addListener("finished", channelFinished);
                viewer.addListener("live", channelLive);
                viewer.addListener("offline", channelOffline);
        });