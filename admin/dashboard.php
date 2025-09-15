<?php 
session_start();
if (isset($_SESSION['user_id'])){
    if($_SESSION['role'] == "admin"){
        echo "you are admin, welcome to admin dashboard";
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
    <title>library</title>
    <style>
        .adminnavbar {
            display: flex;
            width: 200px;
            flex-direction: column;
            background-color: green;
            color: white;
        }
        .adminnavbar a{
            color: white;
            text-decoration: none;
        }
        .adminnavbar ul li{
             margin: 20px 0 20px 0;
            list-style: none;

        }

    </style>
</head>
<body>
    <nav class ="adminnavbar">
        <ul>
            <li> <a href = "view_transactions.php"> View transactions</a></li>
            <li> <a href = "manage_users.php"> Manage Users</a></li>
</ul>
    </nav>
    <a href = "../logout.php">Log out </a>
</body>
</html>