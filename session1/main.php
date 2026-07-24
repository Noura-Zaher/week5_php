<?php
session_start();
include('validate.php');

if($_SERVER['REQUEST_METHOD']=="POST"){

    $errors =[];
    foreach($validate as $key => $validateValue ){
        $value = filter_input(INPUT_POST,$key,$validateValue['filter'],$validateValue['myOption']);
       
        if(empty($_POST[$key])){
            $errors[$key]="you must fill $key";
        }else if($value == false){
            $errors[$key] = $validateValue['errorMsg'];
        }
}
    if($errors){
        $_SESSION['errors']= $errors;
        header("location:index.php");
        exit;
    }
$_SESSION['name']=$_POST['username'];
header("location:welcome.php");
 exit;
    
    
}else{
    header("location:index.php");
        exit;
         }