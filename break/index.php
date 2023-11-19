<?php
/*for($count = 1 ; $count <= 10 ; $count++){
    echo "Hello".$count."<br>";
    if($count == 5){
        break;
    }
}*/

// =============continue===================================

/*for($count = 1 ; $count <= 10 ; $count++){
    echo "PHP ";
    if($count == 6){
        continue;
    }
    echo "is ";
    echo "awesome<br><br>";
    // if($count != 6){
    //     echo "is ";
    //     echo "awesome<br><br>";
    // }
   
}*/

?>





<!-- ===================nested break===================================== -->

<?php
/*for($outer_list = 1; $outer_list <= 3; $outer_list++){
    echo "List $outer_list <br>";
    for($inner_list = 1; $inner_list<= 2; $inner_list++){
        echo ".............Inner List $inner_list <br>";
        
        if($outer_list == 2 && $inner_list == 1){
            //break 2;
            goto Out;
        }
    }
}
Out:
echo "End";*/

// ====================goto===================================
echo "Nitesh <br>";
goto Web_ship;
echo "Dash <br>";

Web_ship:
echo "Puja";



?>
