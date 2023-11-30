<?php
//move_uploaded_file();

if(isset($_POST['submit'])){
    $filename =  $_FILES['myfile']['name'];
    $tmpname  =  $_FILES['myfile']['tmp_name'];
    $filesize =  $_FILES['myfile']['size'];
    $uploac   =  'image/'.$filename;

//move_uploaded_file($tmpname,$uploac );

    $uploadOk = 1;
    $imageFileType = strtolower (pathinfo($filename,PATHINFO_EXTENSION));
 
    $check = getimagesize($tmpname);
    //print_r($check);
    // echo $check['mime'];

    if($check !== false){
        echo "file is an image-".$check['mime'];
        $uploadOk = 1;
    }
    else{
      $uploadOk = 0;
    }

    if(file_exists($uploac)){
        echo "File already exists.";
        $uploadOk = 0;
    }

    if($filesize > 100000){
        echo "File is too large.";
        $uploadOk = 0;
    }

    if($imageFileType != 'jpg' && $imageFileType != 'png'){
        echo 'File only allowed jpg or png.';
        $uploadOk = 0;
    }

    if($uploadOk == 0){
        echo "Sorry, file was not uploaded.";
    }
    else if(move_uploaded_file($tmpname, $uploac)){
        echo 'File uploaded.';
    }
    else{
        echo "There was an error uploading your file.";
    }

//echo $check['mime'];
}
?>

<form action="file_upload.php" method="POST" enctype="multipart/form-data">

<input type="file" name="myfile"><br><br>
<input type="submit" name="submit" value="upload">

</form