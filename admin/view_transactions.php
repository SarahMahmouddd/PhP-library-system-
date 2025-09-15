<?php
session_start();
include "../db.php";
if(isset($_SESSION['user_id'])){
    if ($_SESSION['role'] == "admin"){
$sql= "select * from transactions";
$result = mysqli_query($conn, $sql);
if (!$result){
    echo "error!: {$conn->error}";
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
        .update{
            text-decoration: none;
            background-color: green;
            color: white;
        }
        .delete{
            text-decoration: none;
            background-color: red;
            color: white;
        }
        </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>user id</th>
                <th>book id</th>
                <th>issue date</th>
                <th>return date</th>
                <th>status</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($row =  mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo "{$row['user_id']}"?></td>
                 <td><?php echo "{$row['book_id']}"?></td>
                  <td><?php echo "{$row['issue_date']}"?></td>
                   <td><?php echo "{$row['return_date']}"?></td>
                   <td><?php echo "{$row['status']}"?></td>
                   <td><a class ="update" href = "update_transactions.php?transaction_id=<?php echo $row['id'];?>">update</a></td>
                   <td><a class = "delete" href = "delete_transactions.php?transaction_id=<?php echo $row['id'];?>">delete</a></td>
</tr>
<?php } ?>
        </tbody>
    </table>
</body>
</html>