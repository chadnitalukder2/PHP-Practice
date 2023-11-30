<?php
#===================MySQLi Procedural connction=========================
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = "myphptuteDb1";
$conn =  mysqli_connect($hostname, $username, $password, $dbname);

if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}
    echo 'Connected Successfully';

 #================Create Database start===================

/*$sql = "CREATE DATABASE myphptuteDb";

if(
    $conn->query($sql) == TRUE){
    echo "DB Created.";
}
else{
    echo "Error Creating DB".$conn->error;
}
$conn->close();*/
#================Create Database end===================
#===============create Table  start===============
/*$sql = "CREATE TABLE Student(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) ,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if(mysqli_query($conn, $sql)){
    echo "Table Create.";
}
else{
    echo "Table Not Create.".mysqli_error($conn);
}
$conn->close();*/
#================Create Table end===================
#================Insert data star===================
$sql = "INSERT INTO Student(firstname,lastname,email)
VALUE('Chadni','Talukder','puja@gmail.com')" ;

if(mysqli_query($conn, $sql) == TRUE){
    echo "Data Inserted";
}
else{
    echo "data not insert".$conn->error;
}

?>


