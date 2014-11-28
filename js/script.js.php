<?php
    header("Content-Type: application/x-javascript");
    require_once("../database.php");
?>
$(document).ready(function() {
    /**VIEWPORT DATA**/
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
        $("#width").text(the_width);
        $("#height").text(the_height);
    }
    /****/
    /**VIDEO ASPECT RATIO**/
    $(window).load(function() {
        $(".left").keepRatio({
            ratio: 4 / 3,
            calculate: "full"
        });
        $(".video").keepRatio({
            ratio: 4 / 3,
            calculate: "full"
        });
        //$(window).on("resize", resizeEventHandler);
        //resizeEventHandler();
    });
    /****/
    /**LIGHTS CONTROLS**/
        $("#lights").click(function() {
            $("#darkness").fadeToggle(500);
            $("#logo").fadeToggle(500);
            $("#madeby").fadeToggle(500);
        });
    /****/
    /**VIDEO CONTROLS**/
    var videoWin;
    $("#video-toggle").click(function() {
        $("#video").fadeToggle(500);
        //$("#video").detach();
    });
    $("#video-toggle").click(function() {
        if (videoWin && !videoWin.closed) {
            chatWvideoWinin.close();
            return false;
        }
        videoWin = window.open(
            $(this).attr("rel"),
            "videoWin",
            "width=600,height=480,toolbar=0,top=0,left=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1"
            );
        return false;
    });
    var watchVideo = setInterval(function() {
        if (videoWin.closed) {
            clearTimeout(watchChat);
            $("#video").show(500)
        }
        return false;
    }, 250);
    /****/
    /**CHAT CONTROLS**/
    var chatWin;
    $("#chat-toggle").click(function() {
        $("#chat").fadeToggle(500);
        //$("#chat").detach();
    });
    $("#chat-toggle").click(function() {
        if (chatWin && !chatWin.closed) {
            chatWin.close();
            return false;
        }
        chatWin = window.open(
            $(this).attr("rel"),
            "chatWin",
            "width=320,height=480,toolbar=0,top=0,left=601,menubar=0,location=0,status=0,scrollbars=0,resizable=1"
            );
        return false;
    });
    var watchChat = setInterval(function() {
        if (chatWin.closed) {
            clearTimeout(watchChat);
            $("#chat").show(500)
        }
        return false;
    }, 250);
    /****/
});
/**RELOAD STREAM CONTROL**/
function reload() {
    $("#stream").attr("src", $("#stream").attr("src"));
}
/****/