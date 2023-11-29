<?php
/* $_POST['fname']."<br>";
$_POST['email'];*/

$err = '';


if(isset($_GET['fname']) && isset($_GET['email'])){
 
    $fname =$_GET['fname'];
    $email =$_GET['email'];

    if(empty($fname) && empty($email)  ){
        $err = 'Fill up fiel';
 }
 else{
    echo "Thanks " .$fname. " for your Email ".$email;
 }
}
?>

<!-- array = (key1 => value1, key2 => value2, key3 => value3,) -->
<form action="Form_Handling.php" method="GET">
Name: <input type="text" name= "fname"><?php echo $err ?><br><br>
Email: <input type ="email" name="email"><?php echo $err ?><br><br>
<input type="submit" value="submit">
</form>

