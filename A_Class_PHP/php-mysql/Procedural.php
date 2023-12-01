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
    echo 'Connected Successfully'.'<br><br>' ;

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
/*$sql = "INSERT INTO Student(firstname,lastname,email)
VALUE('Chadni','Talukder','puja@gmail.com')" ;

if(mysqli_query($conn, $sql) == TRUE){
    echo "Data Inserted";
}
else{
    echo "data not insert".$conn->error;
}*/
#================Insert data end===================
#================ data Show website start===================

/*$sql = "SELECT *
        FROM Student
        ORDER BY firstname ";

$result = mysqli_query($conn,$sql);
echo"<table>
<tr>
<th>id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email </th>
</tr>";

if(mysqli_num_rows($result) > 0){
    while( $row = mysqli_fetch_assoc($result)){
        $id        = $row['id'];
        $firstname = $row['firstname'] ;
        $lastname  = $row['lastname'];
        $email     = $row['email']."<br>";
 
        echo    "
            <tr>
                <td>$id</td>
                <td>$firstname</td>
                <td>$lastname</td>
                <td>$email</td>
            </tr>
            ";
           
    };
  
   echo "</table>";
}
else{
    echo "No result found";
}*/
#================ data Show website end===================
#================ data Update  start===================

/*$sql = "UPDATE Student
        SET lastname = 'Talukder', email = 'chad@gmail.com'
        WHERE id = 3";

if(mysqli_query($conn, $sql)){
    echo "Update Succesfully";
}
 else{
    echo "Not Update";
 }*/
#================ data Update   end===================
#================ data   Ddelete  start===================
$sql = "DELETE FROM Student
        WHERE id=3";
    if(mysqli_query($conn, $sql)){
        echo "Delete Succesfully";
    }
     else{
        echo "Not Delete";
     }    

#================ data  Ddelete  end===================

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
</head>
<style>
    table, th, td {
         border: 1px solid;
    }
    </style>
<body>
    
</body>
</html>
