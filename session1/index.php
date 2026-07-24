<?php

// $email = filter_var("noura           @gmail.come",FILTER_SANITIZE_EMAIL);
// var_dump(filter_var($email,FILTER_VALIDATE_EMAIL)); 

// $x=10;
// var_dump(filter_var($x,FILTER_VALIDATE_INT,['options' => ['min_range' => 18, 'max_range' => 30]])); 

// $url = "https://www.google.com";
// var_dump(filter_var($url,FILTER_VALIDATE_URL));  

// //Regex
// $regex = "eslam123@#";
// var_dump(filter_var($regex,FILTER_VALIDATE_REGEX,['option'=>['regexp'=>'     //regex          ']]));



session_start();

if(isset($_SESSION['errors'])){
    foreach($_SESSION['errors'] as $error){
        echo $error;
        echo "<br>";
    }
    unset ($_SESSION['errors']);
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="main.php" method="post">
    <label for="">username</label>
    <input type="text" value="" name="username">
    <label for="">email</label>
    <input type="text" value=""name="email">
    <label for="">password</label>
    <input type="text" value=""name="password">
    <label for="">age</label>
    <input type="text" value=""name="age">
    <button type="submit">submit</button>
    </form>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validationFile.php" method="post" enctype="multipart/form-data">
        <label for="">image</label>
        <input type="file" name="img" id="">
        <button type="submit">submit</button>

    </form>
</body>
</html>











