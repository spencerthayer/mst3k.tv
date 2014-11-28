<?php
/** /
$key = "1iTAxlPKr5IEZf2SS_tjh5t4oNDNyLOuy1zfYzmobgVk";
$spreadsheet_url="https://docs.google.com/spreadsheets/d/".$key."/export?gid=0&format=csv";
$csvfile = $spreadsheet_url;
$file_handle = fopen($csvfile, "r");
fgetcsv($file_handle);
while($csv_line = fgetcsv($file_handle,1024)) {
    $col = $csv_line;
    $first = $col[0];
    $prefix = $col[1];
    $suffix = $col[2];
    $middle = $col[3];
    $title = $col[4];
    for ($i = 0, $j = count($first); $i <= $j; $i++) {
        $firstName = array($first);
        shuffle($firstName);
        print $firstName;
    }
}
fclose($file_handle) or die("can't close file");
/** /
while (!feof($file_handle) ) {
    $col = fgetcsv($file_handle, 1024);
    $first = array($col[0]);
    shuffle($first);
    $prefix = $col[1];
    $suffix = $col[2];
    $middle = $col[3];
    $title = $col[4];
}
fclose($file_handle);
    for ($i = 0; $i <= 0; $i++) {
        $name = $first[$i];
    }
    echo $name;
/**/
$first = array(
);
$prefix = array(
);
$suffix = array(
);
$middle = array(
);
$title =  array(
    );
shuffle($first);
shuffle($prefix);
shuffle($suffix);
shuffle($middle);
shuffle($title);
function seoUrl($string) {
    //Lower case everything
    //$string = strtolower($string);
    //$string = ucfirst($string);
    //Make alphanumeric (removes all other characters)
    //$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}
for ($i = 0; $i <= 0; $i++) {
    $name = $title[$i].$first[$i]." ".$middle[$i].$prefix[$i].$suffix[$i];
}
for ($i = 0; $i <= 0; $i++) {
    $nameStart = $first[$i];
    $nameEnd = $middle[$i].$prefix[$i].$suffix[$i];
}
$nickname = seoUrl($name);
//
//print $nickname;
/**/
?>