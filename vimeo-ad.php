<?php
    $vimeo_track ="https://vimeo.com/ondemand/mst3k?utm_source=mst3ktv_link&utm_medium=affiliate&utm_campaign=mst3ktv";
    $vimeo_url =
        "http://player.vimeo.com/video/".
        "106403554".
        "?".
        "utm_source=mst3ktv_embed".
        "&utm_medium=affiliate".
        "&utm_campaign=mst3ktv".
        "&title=0".
        "&byline=0".
        "&portrait=0".
        "autoplay=true".
        "";
    $vimeo_iframe = "<iframe name='videoTrends' src='".$vimeo_url."' width='100%' height='100%' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>";
    /*
    <iframe src="//player.vimeo.com/video/106403554?utm_source=mst3ktv_embed&utm_medium=affiliate&utm_campaign=mst3ktv&title=0&byline=0&portrait=0" width="500" height="281" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    <iframe name="videoTrends" src="http://player.vimeo.com/video/106403554?title=0&amp;byline=0&amp;portrait=0&amp;color=0093d0&amp;" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    */
?>
<script type="text/javascript">
<!--//<![CDATA[
    // SWAP innerHTML
    function switchToVid()  {
        $("#vimeoMST3K").animate({
                "width":"300px",
                "height":"250px",
                "marginTop":"0px",
                "marginLeft":"0px",
            //"width":"700px",    /* ASPECT WIDTH  */
            //"height":"400px",   /* ASPECT HEIGHT */
            //"marginTop":"-150",/* EXPAND RIGHT  */
            //"marginLeft":"-350",/* EXPAND RIGHT  */
            "z-index":"100000"
        });
        document.getElementById("vimeoMST3K");
        vimeoMST3K.innerHTML = "<?=$vimeo_iframe;?>";
        $("#vimeoMST3K").hover(function() {
            $(this).animate({
                //"width":"700px",    /* ASPECT WIDTH  */
                //"height":"400px",   /* ASPECT HEIGHT */
                //"marginTop":"-150",/* EXPAND RIGHT  */
                //"marginLeft":"-350",/* EXPAND RIGHT  */
                "z-index":"100000"
            }, 256)
        }, function() {
            $(this).animate({
                "width":"300px",
                "height":"250px",
                "marginTop":"0px",
                "marginLeft":"0px",
                "z-index":"1"
            }, 256)
        });
    window.open('<?=$vimeo_track;?>','_blank');
    }
//]]>//-->
</script>
<a href="javascript:void(0);" onclick="switchToVid();">
    <img src="/img/MST3Kxw-300x250.jpg" alt="The official home of MST3K is on Vimeo!" class="center img-responsive" style="border:none;" />
</a>