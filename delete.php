<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    include("connect.php");

    $sql="DELETE FROM books WHERE Id=$id";
    if(mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["delete"]="Book Deleted Successfully";
        header("location:index.php");
    }
}

?>