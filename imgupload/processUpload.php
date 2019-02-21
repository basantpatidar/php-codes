<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 4/26/2018
 * Time: 2:01 AM
 */

if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    //print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    // print_r($fileExt);

    $fileActualExt = strtolower(end($fileExt));
    //print"$fileActualExt";

    $allowed = array('jpg','jpeg','png');
    //print_r ($allowed);

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
           if($fileSize < 1240000){
                //echo"Correct Size";
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                 print"$fileNameNew";

                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                header("Location: index.php?Successful");

            }else{
                echo"Image file is too big";
            }
        }else{
            echo"There was an error uploading your image file";
        }
    }else{
        echo"You cannot upload this type of file";
    }


}