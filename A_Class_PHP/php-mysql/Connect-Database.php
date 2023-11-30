<?php

$hostname = 'localhost';
$username = 'root';
$password = '';

//==========MySQLi Object Oriented========================
//new mysqli(host, username, password)

/*$conn =  new mysqli($hostname, $username, $password);

if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    echo 'Connected Successfully';
}

$conn->close();*/

//===============MySQLi Procedural===============

$conn = mysqli_connect($hostname, $username, $password);

if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}
else{
    echo 'Connected Successfully';
}
mysqli_close($conn);



?>