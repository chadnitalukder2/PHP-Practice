<?php
//==========MySQLi Object-Oriented connction========================
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = "myphptuteDb";
$conn =  new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    echo 'Connected Successfully';
}


#======create database start===========================================
/*$sql = "CREATE DATABASE myphptuteDb1";

if(mysqli_query($conn, $sql)){
echo "DB created";
}
else{
    echo "Error creating db".mysqli_error($conn);
}

mysqli_close($conn);*/

#======create database end=================
#====================create Table start=============================
/*$sql = "CREATE TABLE Student(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50) ,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 )";
if($conn->query($sql) == TRUE){
    echo "Table Created";
}
else{
echo 'Error creating table.'.$conn->error;
}

$conn->close();*/
#====================create Table end=============================
#================Insert data star===================
/*$sql = "INSERT INTO Student(firstname,lastname,email)
VALUE('Chadni','Talukder','puja@gmail.com')" ;

if( $conn->query($sql) == TRUE){
    echo "Data Inserted";
}
else{
    echo "data not insert".$conn->error;
}*/
#================Insert data end===================
#================ data Show website start===================





?>
