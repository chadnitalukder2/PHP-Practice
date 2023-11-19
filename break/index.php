<?php
/*for($count = 1 ; $count <= 10 ; $count++){
    echo "Hello".$count."<br>";
    if($count == 5){
        break;
    }
}*/

for($count = 1 ; $count <= 10 ; $count++){
    echo "PHP ";
    if($count == 6){
        continue;
    }
    echo "is ";
    echo "awesome<br><br>";
   /* if($count != 6){
        echo "is ";
        echo "awesome<br><br>";
    }*/
   
}

?>