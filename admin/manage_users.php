<?php
session_start();
if(isset($_SESSION['user_id'])){
    if ($_SESSION['role'] == "admin"){
        include "../db.php";
$sql= "select id, name, email, role from test where role ='user'";
$result = mysqli_query($conn, $sql);
if (!$result){
    echo "error!: {$result->error}";
}
else{

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
    <title>library</title>
    <style>
        table{
            border: none;
            width: 100%;

        }
        tr, th{
            border-bottom: 2px solid green;
        }
        td{
            text-align:center;
            border: none;
            background-color: gray;
        }
        .link{
            text-decoration: none;
            background-color: red;
            color:white;
        }
        </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($row =  mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo "{$row['id']}"?></td>
                 <td><?php echo "{$row['name']}"?></td>
                  <td><?php echo "{$row['email']}"?></td>
                   <td><?php echo "{$row['role']}"?></td>
                    <td><a class = "link" href = "deleteuser.php?user_id=<?php echo $row['id']; ?>">Delete Users</a></td>
</tr>
<?php } ?>
        </tbody>
    </table>
</body>
</html>


