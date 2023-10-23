<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


$link = mysqli_connect("localhost", "root", "");

// Check connection

if($link === false)
{
 die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt create database query execution

$sql = "CREATE DATABASE myshop";

if(mysqli_query($link, $sql))
{
 echo "Database created successfully";
} else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
</body>
</html>