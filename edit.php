<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="style/bootstrap.css">
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Book</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <?php 
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            include("connect.php");
            $sql="SELECT * FROM books WHERE Id=$id";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($result);

            ?> 
            <form action="process.php" method="post">
                <div class="form-element my-4">
                    <input type="text" class="form-control" name="title" value="<?php echo $row['Title'];?>" placeholder="Book Title:">
                </div>
                <div class="form-element my-4">
                    <input type="text" class="form-control" name="author" value="<?php echo $row['Author'];?>" placeholder="Author name">
                </div>
                <div class="form-element my-4">
                    <select name="type" class="form-control">
                        <option value="">Select Book Type</option>
                        <option value="Adventure"<?php if($row['Type']=="Adventure"){echo "selected";}?>>Adventure</option>
                        <option value="Fantasy"<?php if($row['Type']=="Fantansy"){echo "selected";}?>>Fantasy</option>
                        <option value="Sci-Fi"<?php if($row['Type']=="Sci-Fi"){echo "selected";}?>>Sci-Fi</option>
                        <option value="Horror"<?php if($row['Type']=="Horror"){echo "selected";}?>>Horror</option>
                    </select>
                </div>
                <div class="form-element my-4">
                    <input type="text" value="<?php echo $row['Description'];?>" class="form-control" name="description" placeholder="Book Description:">
                </div>
                <input type="hidden" name="id" value="<?php echo $row['Id'];?>">
                <div class="form-element">
                    <input type="submit" class="btn btn-success" name="edit" value="Edit Book">
                </div>
            </form>

            <?php
        }
        ?> 
    </div>    
</body>
</html>