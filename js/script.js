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
        // $(".left").keepRatio({
        //     ratio: 4 / 3,
        //     calculate: "full"
        // });
        $(".stream").keepRatio({
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
    // var watchVideo = setInterval(function() {
    //     if (videoWin.closed) {
    //         clearTimeout(watchChat);
    //         $("#video").show(500)
    //     }
    //     return false;
    // }, 250);
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
    // var watchChat = setInterval(function() {
    //     if (chatWin.closed) {
    //         clearTimeout(watchChat);
    //         $("#chat").show(500)
    //     }
    //     return false;
    // }, 250);
    /****/
});

function fullScreen() {
    // document.documentElement.webkitRequestFullScreen();
    if (!document.fullscreenElement && // alternative standard method
        !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) { // current working methods
        if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) {
            document.documentElement.msRequestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
            document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
    }
}
/**RELOAD STREAM CONTROL**/
function reload() {
    $("#stream").attr("src", $("#stream").attr("src"));
}
//**BUILD YOUR OWN STREAM**/
$(window).on("load", function() {
    $("#openStream").click(function() {
        var baseURL = "/",
            divideURL = "/",
            openStream1 = $("#buildOne").val(),
            openStream2 = $("#buildTwo").val(),
            openStream3 = $("#buildThree").val();
        var newWindow = window.open(baseURL + openStream1 + divideURL + openStream2 + divideURL + openStream3, "_self");
        newWindow.focus();
    });
});

function minVal() {
    val = 0.033;
    brightnessVal = $(".stream").attr("data-brightness");
    contrastVal = $(".stream").attr("data-contrast");
    brightness = Number(brightnessVal) - Number(val / 2);
    contrast = Number(contrastVal) + Number(val);
    streamVal(brightness, contrast);
}

function addVal() {
    val = 0.033;
    brightnessVal = $(".stream").attr("data-brightness");
    contrastVal = $(".stream").attr("data-contrast");
    brightness = Number(brightnessVal) + Number(val / 2);
    contrast = Number(contrastVal) - Number(val);
    streamVal(brightness, contrast);
}

function streamVal(brightness, contrast) {
    $(".stream").attr("data-brightness", brightness);
    $(".stream").attr("data-contrast", contrast);
    $(".stream").css({
        "filter": "brightness(" + brightness + ") contrast(" + contrast + ")",
        "-webkit-filter": "brightness(" + brightness + ") contrast(" + contrast + ")",
        "-moz-filter": "brightness(" + brightness + ") contrast(" + contrast + ")",
        "-o-filter": "brightness(" + brightness + ") contrast(" + contrast + ")",
        "-ms-filter": "brightness(" + brightness + ") contrast(" + contrast + ")"
    });
}
streamVal(1, 1);

// function zoom(zoom, x, y) {
//     $(".stream").zoomer({
//         zoom: zoom,
//         width: "auto",
//         height: "auto",
//         tranformOrigin: "\"" + x + " " + y + "\""
//     });
//     $iframe = $("iframe.demo");
//     $iframe.data().zoomer.zoom = zoom;
//     // $iframe.data().tranformOrigin = x + " " + y;
//     $iframe.zoomer("refresh");
// }

// $(function() {
//     // $(".right").resizable();
//     $(".left").resizable();
//     $(".left").resize(function() {
//         $(".right").width($(".screen").width() - $(".left").width());
//     });
//     $(window).resize(function() {
//         $(".right").width($(".screen").width() - $(".left").width());
//         $(".left").height($(".screen").height());
//     });
// });
function zoom(zoom) {
    width = $(".clipStream").width();
    height = $(".clipStream").height();
    w = width * zoom;
    h = height * zoom;
    // x = -1 * w / 2;
    // y = -1 * h / 2;
    $(".stream").css("width", w);
    $(".stream").css("height", h);
    // $(".stream").css("margin-left", x);
    // $(".stream").css("margin-top", y);
    // console.log(width + ":" + w + "/" + x + "," + height + ":" + h + "/" + y);
    console.log(w + ":" + h);
}