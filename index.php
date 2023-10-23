<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myshop</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class='container my-5'> 
            <h2>List of Clients</h2>

            <a class='btn btn-primary' href="/myshop/create.php" role="button">New Client</a>
            <br>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "myshop";

                    //create connection 
	                $connection = new mysqli($servername,$username,$password,$database);

	                //check conncetion
	                if($connection->connect_error){
		                die("Connection Failed: ". $connection->connect_error);
	                    }

                    //read all row from database table 
                    $sql = "SELECT * FROM clients";
                    $result = $connection->query($sql);

                        if(!$result){
                            die("Invalid query: " . $connection->error);
                        }
                        
                        // read data of each row
                        while($row = $result->fetch_assoc()){
                            echo "
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[phone]</td>
                                <td>$row[address]</td>
                                <td>$row[created_at]</td>
                                <td>
                                    <a href='/myshop/edit.php?id=$row[id]'<span class='material-icons'>&#xE254</span></a>
                                    <a href='/myshop/delete.php?id=$row[id]'<span class='material-icons'>&#xE872</span></a>
                                   
                                </td>
                                </tr>
                                ";
                        }
                         ?>
                </tbody>
            </table>
            <a class='btn btn-primary' href="/myshop/logout.php" role="button">Log Out!</a>
    </div>
</body>
</html>