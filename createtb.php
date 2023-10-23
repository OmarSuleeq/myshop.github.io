My Drive
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

$link = mysqli_connect("localhost", "root", "", "myshop");

// Check connection


if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

// Attempt create table query execution

$sql = "CREATE TABLE clients (
     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (100) NOT NULL,
    email VARCHAR (200) NOT NULL UNIQUE,
    phone VARCHAR(20) NULL,
    address VARCHAR(200) NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    
   )";

if(mysqli_query($link, $sql))
{
    echo "Table created successfully.";
   } 
   else
   {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }
   // Close connection
   mysqli_close($link);
   ?>
   
</body>
</html>