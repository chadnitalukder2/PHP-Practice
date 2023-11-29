<?php
//date(format, timestamp);

 date('d - m - y'); // 26-04-23 Y=2023
 date('l'); //week
 date('h:i:s a'); //time 

 $time = time(); //function
date('h: i: s a', $time);
"<br>";
date('h: i: s a', $time+144000); //current time of bangladesh

date_default_timezone_set("Asia/Dhaka"); //current time
date('h : i : s a');

$d = mktime(10,11,54,8,12,2014); //icce moto show koranu jay
echo date("Y - m - d / h : i : sa", $d)


?>