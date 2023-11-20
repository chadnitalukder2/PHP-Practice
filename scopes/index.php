<!-- =================Local scope=============================== -->

<?php
/*function sum() {
    $first_num = 10;
    $second_num = 20;
    $result =  $first_num + $second_num;
    echo $result;
}
sum();*/
?>

<!-- =================Global scope=============================== -->

<?php
/*$test_var = "Test";
function my_name(){
    global $test_var;
    global $my_name;
$my_name = "Puja";
echo $test_var;
}
my_name();
echo $my_name;*/
?>

<!-- =================Parameter scope=============================== -->

<?php

?>

<!-- =================Static scope=============================== -->

<?php

function order_count(){
    static $count = 0;
    $count++;
    echo $count ."<br>";

 }
 order_count();
 order_count();
 order_count();

?>