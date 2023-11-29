<?php
    $text = "Hello world i am php";

   echo strlen($text)."<br>";
   echo str_word_count($text)."<br>";
   echo strrev($text)."<br>";
   echo strpos($text, 'world')."<br>";
   echo str_replace('php','PHP',$text)."<br>";
?>