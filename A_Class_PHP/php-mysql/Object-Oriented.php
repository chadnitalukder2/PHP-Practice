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
    echo 'Connected Successfully'.'<br><br>';
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

/*$sql = "SELECT *
        FROM Student";

$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<table>
    <tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    </tr>";
  while( $row = $result->fetch_assoc()){

        $id        =  $row['id'];
        $firstname =  $row['firstname'];
        $lastname  =    $row['lastname'];
        $email     =    $row['email'];

echo "
        <tr> 
        <td>$id</td>
        <td>$firstname</td>
        <td>$lastname</td>
        <td>$email</td>
        </tr>";        
  }

  echo"</table>";
 
}
else{
    echo "No result found";
}*/
#================ data Show website end===================
#================ data Update start===================
/*$sql = "UPDATE Student
        SET firstname = 'Chad', lastname = 'Talukder', email = 'chad@gmail.com'
        WHERE id = 2";
if($conn->query($sql) == TRUE){
    echo "Update Succesfully";
}
 else{
    echo "Not Update";
 }*/
#================ data Update   end===================
#================ data   Ddelete  start===================
$sql = "DELETE FROM Student
        WHERE id=3";
 if($conn->query($sql) == TRUE){
            echo "Delete Succesfully";
}
 else{
            echo "Not Delete";
    }
#================  Ddelete  end===================
$conn->close();
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