<?php
//$my_name = "Nitesh";

/*if(!isset($my_name)){
    $my_name = "Puja";
}
echo $my_name;*/

/*$name_val = isset($my_name) ? $my_name: "Puja";
echo $name_val;*/
// ===================================
$another_val = "Puja";
$name_val = $my_name ?? $another_val ;
echo $name_val;
?>