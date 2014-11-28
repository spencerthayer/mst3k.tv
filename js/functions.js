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
      /**VIEWPORT**/
      $(document).ready(function(e) {
        showViewportSize();    
      });
      $(window).resize(function(e) {
        showViewportSize();
      });
      function showViewportSize() {
        /**/
        var the_width = $(window).width();
        var the_height = $(window).height();
        /** /
        var the_width = document.body.clientWidth;
        var the_height = document.body.clientHeight;
        /**/
        $('#width').text(the_width);
        $('#height').text(the_height);
      }
      $('#iframechat').contents().find('#dimensions_warning').hide();
      $("#iframechat-content #dimensions_warning").get().hide();
      $("#video").fitVids({ customSelector: "iframe[]"});
