
<?php
	include 'conn.php';
	session_start();

	//if(isset($_SESSION['userID'])){

	//	header('location:login.php');
	//}

	if(isset($_POST['log'])){

		$user = $_POST['username'];
		$pass =  $_POST['pass'];

		$sql = "SELECT * FROM usercli where username = '$user' and password = '$pass'";
		$result = $conn->query($sql);

		if($result-> num_rows > 0){
			while($row= $result->fetch_assoc()){
				$_SESSION['userID'] = $row['userID'];
				$_SESSION['username'] = $row['username'];	

		
			}
			?>
			<script> alert('Welcome <?php echo $_SESSION['username']?>'); </script>
			<script>window.location='index.php';</script>
			<?php

		
			}else{
			    echo "<center><p style=color:red;>Invalid username or password</p></center>";
                ?>
				<button align="center" onclick="history.go(-1);">Back </button>
				<?php
                
		}
		$conn->close();
	}
?>