<?php  
$dbHost="localhost";
$dbUser="root";
$dbpass="";
$dbName="crud";

$conn=mysqli_connect($dbHost,$dbUser,$dbpass,$dbName);

if(!$conn){
    die("Something went wrong");
}else{
    echo "Connected sucessfully";
}
?>