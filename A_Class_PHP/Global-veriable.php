<?php
$_SERVER['PHP_SELF'];
$_SERVER['SERVER_NAME'];
$_SERVER['SERVER_ADDR']; //ip addres
$_SERVER['SERVER_SOFTWARE'];
$_SERVER['HTTP_HOST'];
$_SERVER['SCRIPT_NAME'];
$_SERVER['REQUEST_METHOD'];
?>
<!-- ============================================ -->

<?php
/*$_REQUEST['fname']; //post and get 2tai use kore informetion newya jay
 $_POST['fname']; //only Post
 echo $_GET['fname']; //only GET*/
?>
<!-- <form action ="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
    <input type="text" name="fname"><br>
    <input type="submit" value="submit"><br>
</form> -->

<!-- ================================================================= -->
<?php
echo $_GET['channel']; 
echo $_GET['Course'];
?>

<a href = "superglobals.php?channel=PUJA&Course=PHP">Click Me </a>



