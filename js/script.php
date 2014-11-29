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
    <?/*
    params.emoticonPath = "http://deep13.us/images/emoticons/";
    params.emoticonList = ":)->smile.gif,;)->wink.gif,:D->awesome.gif,>:P->madppbt.gif,:P->tongue.gif,xp->ppbt.gif,>:(->angry.gif,:(->sad.gif,:$->blush.gif,:0->onoes.gif,8|->hmf.gif,XD->xd.gif,:la:->la.gif,D:->D8.gif,:3->meow.gif,;D->semicolond.png,n_n->shiffy.png,<3->heart.png,:love:->love.gif,:lemon:->lemon.gif,:facepalm:->facepalm.gif,:hmm:->hmm.gif,:L->colonl.gif,:|->stare.gif,B)->sunglasses.gif,:zzz:->zzz.png,:goat:->goat.gif,:gert:->goat2.gif,:molko:->molko.gif,:[->creeper.gif,:tj:->chinny.gif,:chinny:->chinchilla.gif,:bat:->bat.gif,:mario:->Emoticon_mario.png,:joel:->joelhodgson.gif,:mike:->mike.png,:tom:->tomservo.gif,:crow:->crow.gif,:gypsy:->gypsy.gif,:brainguy:->brainguy2.png,:nanite:->nanite.png,:hippo:->hippo.gif,:mrt:->mr-t.gif,:kitteh:->cat.gif,:tick:->tick.png,:ae:->ae1.png,:fuae:->fuae.png,:torgo:->torgo.jpg,:nosprings:->coily.png,:mrb:->mrb.png,:itstinks:->itstinks.png,:tor:->tor.png,:iceicebaby:->ice.png,:tearingmeapaht:->tearingmeapart.png,:tnetennba:->moss.png,:sillywalk:->sillywalk.gif,:cthulhu:->cthulu.png,:k9:->k9.png,:greenguy:->h2g2.png,:wutchoo:->arnold.png,:rowr:->rowr.png,:toonces:->toonces.png,:jeff:->jeffg.png,_|oo->forklift.png,:kali:->kali.png,:spittake:->spittake.png,:batwaah:->batman.png,:colonel:->chestbridge.png";
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
        /**** /
    </script>
    */?>