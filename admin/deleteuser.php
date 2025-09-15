<?php
session_start();
include "../db.php";
if(isset($_SESSION['user_id'])){
    if ($_SESSION['role'] == "admin"){
        if (isset($_GET['user_id'])){
            $user_id  =$_GET['user_id'];
        }
$sql= "delete from test where id = '$user_id'";
$result = mysqli_query($conn, $sql);
if (!$result){
    echo "error!: {$conn->error}";
}
else{
    header("Location: manage_users.php");
        }
    }
    else{
        header("Location: ../dashboard.php");
    }

}
else{
    header("Location: ../login.php");
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
    <form action = "#" method ="post">
        <input type = "text" name ="returndate" required placeholder = "date-format: 2025-09-09">
        <input type = "submit" name = "submit" value = "update">
    </form>
</body>
</html>