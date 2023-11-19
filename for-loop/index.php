<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <ul>
            <?php
              /*  for($user_count = 1; $user_count <= 50; $user_count++ ){
            ?>
                    <li> user <?php echo $user_count ?></li>
            <?php
                }*/
            ?>

</ul>
<!-- ============================================================================ -->
             <ul>
             <?php
            for($user_count = 1; $user_count <= 3; $user_count++ ){
               ?>
            <li> user <?php echo $user_count ?>
        <ul>
        <?php
            for($inner_count = 1; $inner_count <= 2; $inner_count++ ){
               ?>
            <li> user <?php echo $inner_count ?>
            <?php
            }
           ?>
            </ul>
        </li>
          <?php
            }
           ?>

   


</ul>
</body>
</html>

<?php
/*for($outer_list = 1; $outer_list <= 3; $outer_list++){
    echo "List $outer_list <br>";
    for($inner_list = 1; $inner_list<= 2; $inner_list++){
        echo ".............Inner List $inner_list <br>";
    }
}*/
?>