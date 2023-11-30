<?php
readfile('info.txt');

//$file = fopen('info.txt', 'r') or die('unable to open file');
//echo fread($file, filesize('info.txt'));
//echo fgets($file, filesize('info.txt'));
$file = fopen('info.txt', 'w') or die('unable to open file');
while(!feof($file)){
    //fgets($file)."<br>";
    echo fgetc($file)."<br>";
 }

fclose($file);

?>