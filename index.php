<?php
include "db.php";
$sql= "select * from books";
$result = mysqli_query($conn, $sql);
if (!$result){
    echo "error!: {$result->error}";
}
else{
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>library</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            overflow-x: hidden;

        }
        header{
            position: fixed;
            top: 0;
            width: 100%;
            padding: 30px;
            background-color: gray;

        }
        .indexsection{
            display:flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .indexsection div{
            width: 200px;
            text-align:center;
            margin-top: 100px;
        }
        .indexsection img{
            width: 100%;
        }
        footer{
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: gray;
            padding: 10px;
            text-align: center;


        }
        .book{
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div>
        <header>
<h1>library home page</h1>
        </header>
        <section class ="indexsection">
             <?php 
            while($row =  mysqli_fetch_assoc($result)){
            ?>
        <div class = "book">
            <img src ="image/books.jpg">
            <p>Book Title: <?php echo "{$row['title']}"?></p>
            <p>Author: <?php echo "{$row['author']}"?></p>
            <p>ISBN: <?php echo "{$row['isbn']}"?></p>
            <p>Quantity: <?php echo "{$row['quantity']}"?></p>
            <a href = "borrow.php?book_id=<?php echo"{$row['id']}"?>">Borrow</a>
        </div>
        <?php } ?>
         </section>
        <footer>
<p>copyright@book library</p>
        </footer>
    </div>
</body>
</html>