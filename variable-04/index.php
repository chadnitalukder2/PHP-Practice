<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable & syntax</title>
</head>
<body>
    <h1> Hello PHP</h1>
    <h1> <?php  echo "Hello PHP "; ?></h1>

    <?php 
    echo "Chadni ";
    echo " Talukder";
    echo " Puja"
      
    ?>
    <?php 
    $first_name = "Raj";
    $amount = "200";
    ?>
 <h1> Hello <?php echo  $first_name ?>, Your amount is <?php echo $amount ?></h1>

<h2>Total amount is : <?php echo $amount  ?></h3>
</body>
</html>

<?php
$first_name = "Rajdwip";
$last_name = "first_name";
$name = "Raj";
$price = 100;
$address = "Test area, test District, 4458984";
$text = "Ipsum accusam erat accusam dolor dolores stet voluptua, no dolore invidunt eos sea no. Stet accusam gubergren lorem diam et. ";

//echo "$address";
//echo "Hello  $name , your Total amount is : $price";
//echo "Hello ".$name." ,your Total amount is :".$price

echo $$last_name;

?>
