<?php /**/
    /* Gather URL Paths */
        $is_dev = (strpos($_SERVER[ "SERVER_NAME" ], "dev.mst3k.tv") !== false);
        $url = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        $URLpath = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
        $paths = explode("/", $URLpath);
        $channel = $paths[3];
            global $channel;
    /* Error Reporting */
        if(!$is_dev){error_reporting(0);}
    /* List CSV Database */
        $csvFile = "https://docs.google.com/spreadsheets/d/1MS3prMvRYmXdtddS-RAt2g6zv6X_JJv3Zhgb2fsPA4c/pub?output=csv";
        global $csvFile;
        $file_handle = fopen($csvFile, "r");
        global $file_handle;
        $i = 0;
    /* Use CSV Database */
        while (!feof($file_handle) ) {
            $i++;
            $line_of_text = fgetcsv($file_handle, 1024);
            // if ($line_of_text[1]=="yes") {
            //     echo "<li><a href=\"/".$line_of_text[2]."\">".$line_of_text[3]."</a></li>";
            // }
            if ($channel == NULL) {
                if ($line_of_text[0]=="yes") {
                    $isDefault =    $line_of_text[0];
                        global $isDefault;
                    $isPublished =  $line_of_text[1];
                        global $isPublished;
                    $fieldName =    $line_of_text[2];
                        global $fieldName;
                    $fieldTitle =   $line_of_text[3];
                        global $fieldTitle;
                    $fieldStream =  $line_of_text[4];
                        global $fieldStream;
                    $fieldType =    $line_of_text[5];
                        global $fieldType;
                    $fieldChat = $line_of_text[6];
                        global $fieldChat;
                    $fieldServer = $line_of_text[7];
                        global $fieldServer;
                    $fieldSchedule = $line_of_text[8];
                        global $fieldSchedule;
                }
            }
            if ($line_of_text[2] == $channel) {
                $isDefault =    $line_of_text[0];
                    global $isDefault;
                $isPublished =  $line_of_text[1];
                    global $isPublished;
                $fieldName =    $line_of_text[2];
                    global $fieldName;
                $fieldTitle =   $line_of_text[3];
                    global $fieldTitle;
                $fieldStream =  $line_of_text[4];
                    global $fieldStream;
                $fieldType =    $line_of_text[5];
                    global $fieldType;
                $fieldChat = $line_of_text[6];
                    global $fieldChat;
                $fieldServer = $line_of_text[7];
                    global $fieldServer;
                $fieldSchedule = $line_of_text[8];
                    global $fieldSchedule;
                }
        }
        /* VARS */
        $fieldURL = urlencode($fieldName);
            global $fieldURL;
        /* Switch Type of Stream */
        switch ($fieldType) {
            case "Ustream":
                $stream_url = "http://ustream.tv/channel/".$fieldStream;
                $embed_url = "http://ustream.tv/embed/".$fieldStream."?html5ui&autoplay=true&controls=true&showtitle=false&quality=best";
                break;
            case "YouTube":
                $stream_url = "https://youtu.be/".$fieldStream;
                $embed_url = "https://youtube.com/embed/".$fieldStream."?autoplay=1";
                break;
            case "Twitch":
                $stream_url = "https://twitch.tv/".$fieldStream;
                $embed_url = "https://player.twitch.tv/?channel=".$fieldStream."&data-paused=false&muted=false";
                break;
        }
        /* Nicknames */
        include("manlyname.php");
            $nickname = $manlyname;
        /* Chat */
        $field_chat_url = "https://kiwiirc.com/client/".$fieldServer."/?nick=".$nickname."&theme=cli#".$fieldChat;
?>
