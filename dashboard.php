<?php
session_start();
if(isset($_SESSION['user_id'])){
    if($_SESSION['role'] == "user"){
       echo "Welcome to user dashboard";
    }
    else{
        header("Location: admin/dashboard.php");
    }
}
else{
    header ("Location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href = "requestcheck.php">request updates</a>
    <br>
   <a href = "logout.php">Logout</a>
</body>
</html>