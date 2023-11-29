<?php
/*$name = array('saud', 'Ahnaf', 'Saki');
echo $name[0];*/

//Indexed array=========================
/*$name = array();
$name[0]= "Ahnaf";
$name[1]= "Saki";
$name[3] = "Monira";
echo $name[3];*/

//Associative array======================
/*$name = array("Ahnaf" => 10, "Sakhi"=> 20, "Monira" => 20);
echo $name["Sakhi"];*/

//$name = array("Saki"=>10, "Monira"=>30, "Ahnaf"=>20);
/*$name = array("Saki", "Monira", "Ahnaf");

foreach($name as $key=>$value){
    echo $key.' '.$value.'<br>';
}*/

//Multidimensional array

/*$info = array(
    array("Sakhi ",18," Dhaka"),
    array("Ahnaf ",18," sylhet"),
    array("Monira ",25," bogura")
);
//echo $info[0][1];
for($x = 0; $x < 3; $x++){
    for($y = 0; $y < 3; $y++){
        echo $info[$x ][ $y];
    }
    echo "<br>";
}*/

$info = array( 'Saki', 'Babu','Asha','Monir');

/*$count = count($info);
for($x = 0; $x < $count; $x++){
    echo $info[$x].' ';
}*/
//sort($info);
rsort($info);
foreach($info as $value){
    echo $value."<br>";
}

?>