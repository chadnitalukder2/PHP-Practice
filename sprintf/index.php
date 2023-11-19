<?php
$first_name = "Chadni";
$last_name = "Talukder";

//$new_str = printf ('Your first name is: %2$s and your last name is : %1$s', $first_name, $last_name );
//echo $new_str;
$new_str = sprintf ('Your first name is: %2$s and your last name is : %1$s', $first_name, $last_name );
echo "New ". $new_str;

?>

