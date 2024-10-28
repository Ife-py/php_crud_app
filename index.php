<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="style/bootstrap.css">
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Book List(s)</h1>
            <div>
                <a href="create.php" class="btn btn-primary">Add New Books</a>
            </div>
        </header>
        <?php 
        session_start();
        if(isset($_SESSION['create'])){
         ?>
            <div class="alert alert-success">
                <?php 
                    echo $_SESSION['create'];
                    unset($_SESSION['create']);
                ?>
            </div>
            <?php
        }
        ?>
        <?php 
        if(isset($_SESSION['edit'])){
         ?>
            <div class="alert alert-success">
                <?php 
                    echo $_SESSION['edit'];
                    unset($_SESSION['edit']);
                ?>
            </div>
            <?php
        }
        ?>
        <?php 
        if(isset($_SESSION['delete'])){
         ?>
            <div class="alert alert-danger">
                <?php 
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                ?>
            </div>
            <?php
        }
        ?>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $sql = "SELECT * FROM books";
                $result= mysqli_query($conn,$sql);
                while($row= mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $row["Id"];?></td>
                        <td><?php echo $row["Title"];?></td>
                        <td><?php echo $row["Author"];?></td>
                        <td><?php echo $row["Type"];?></td>
                        <td>
                            <a href="view.php?id=<?php echo $row["Id"];?>" class="btn btn-info">Read More</a>
                            <a href="edit.php?id=<?php echo $row["Id"];?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $row["Id"];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php 
                };
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>