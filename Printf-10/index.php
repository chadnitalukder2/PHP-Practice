<?php

// $name = "chadni";
// $school_name = "Testl";
//printf ("Helllo $name");
//$new_name = ucwords($name);  //ucwords()  capital 1st letter
//echo "Hello $new_name";
//echo "Hello ". ucwords( $name);

// printf ("Hello %s", $name);
// printf ("Hello %s My school Name: %s My address is %s",ucwords($name), $school_name, "sunamganj" );

$first_name = "nitesh";
$last_name = "talukder";

/*$html_block = "<div>
<h1>".ucwords ($first_name) ."</h1>
<h2>".ucwords( $last_name) ."</h2>
</div>";
echo $html_block;*/

$html_block = "<div>
<h1> %s</h1>
<h2> %s</h2>
</div>";
printf($html_block, ucwords($first_name ), ucwords($last_name))

?>