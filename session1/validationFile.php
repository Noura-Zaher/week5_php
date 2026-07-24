<?php

session_start();

if($_SERVER['REQUEST_METHOD']=="POST"){
  $errors=[];
  $image =$_FILES['img']; 
  $imgName = $image['name'];
  $imgTampName = $image['tmp_name'];
  $ext = pathinfo($imgName,PATHINFO_EXTENSION);
  $NewName = uniqid(). "." .$ext;

  $imgSize = $image['size']/1024/1024;

  if($filesize > 5){
    $errors[] = "the mage should be less than 5mb";
  }
  if(!in_array($ext,['jpg','png','gif'])){
    $errors[] = "the mage should 'jpg','png','gif'";
  }
if($errors){
        $_SESSION['errors']= $errors;
        header("location:index.php");
        exit();
    }
move_uploaded_file($imgTampName,$NewName);
header("location:welcome.php");
 exit();
}else{
    header("location:index.php");
        exit();
         }

