<?php
session_start();
if(isset($_SESSION['user_id'])){
    if ($_SESSION['role'] == "admin"){
        include "../db.php";
$sql= "select * from books";
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
        </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($row =  mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo "{$row['title']}"?></td>
                 <td><?php echo "{$row['author']}"?></td>
                  <td><?php echo "{$row['isbn']}"?></td>
                   <td><?php echo "{$row['quantity']}"?></td>
</tr>
<?php } ?>
        </tbody>
    </table>
</body>
</html>