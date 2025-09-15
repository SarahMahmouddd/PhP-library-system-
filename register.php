<?php
include "db.php";
if (isset($_POST["send"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $sql = "INSERT INTO `test`(`name`, `email`, `password`, `role`) VALUES ('$name','$email','$password','$role')" ;
    $result = mysqli_query($conn, $sql);
    if (!$result){
        echo "Error: {$result->error}";
    }
    else{
        echo "registered success";
    }
} 
?>


<!DOCTYPE html>
<html lang="en">
    <?php include "heading.php"; ?>
<body>
    <div class = "register">
    <form action = "register.php" method = "post">
        <input type = "text" name = "name" placeholder ="Enter your name">
        <br>
        <input type = "email" name = "email" placeholder = "Enter your email">
        <br>
        <input type = "password" name = "password" placeholder = "Enter your password">
        <br>
        <input type = "text" name = "role" value = "user" hidden>
        <br>
        <button type = "submit" name = "send" value = "send"> sign up</button>
</form>
</div>
</body>
</html>