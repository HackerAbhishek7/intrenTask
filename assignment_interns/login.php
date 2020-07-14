<!-- Back-End Starts Here -->
<?php
	if(isset($_POST['email'])){
		
		// Set Connection Variables
		$server = "localhost";
		$username = "root";
		$password = "";

		// Create Connection 
		$con = mysqli_connect($server,$username, $password);

		// Check For Connection
		if(!$con){
			die("Connection Not Created Error in Backend Part");
		}
		else{
			// echo "Connection Succesfully Created";
		}

		// Collect Post Variables
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Excute Sql Query
		$sql = "select * from `registration` . `registration`  where email = '$email' && password = '$password' ";

		$result = mysqli_query($con, $sql);

		// Check For The Matched Rows
		$num = mysqli_num_rows($result);

		// If Its True
		if($num == 1){
			// $_SESSION['Email'] = $email;
			header('location: home.php');
		}
		else {
			echo "Email and Passwoed Doesnt match";
		}
		
		$con -> close();

	}
?>

<!-- Front-End Starts Here -->
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="description" content="">  
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		#back{
			background: rgba(0, 0, 0, 0.2);
			width: 100%;
			height: 100%;
			position: absolute;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		#box{
			height: 400px;
			width:600px;
			border-radius: 10px;
			text-align: center;
			padding-top: 50px;
			padding-bottom: 50px;
			background: white;
		}
		#ep{
			width: 70%;
			height: 50px;
			border-top: none;
			border-left: none;
			border-right: none;
			margin: 20px;
			background: transparent;
			outline: none;
		}
		a{
			text-decoration: none;
			color:black;
		}
		#btn-close{
			border: none;
			background: white;
			position: absolute;
			margin-left: 240px;
			top: 190px;
		}
	</style>
</head>
<body>
	<div id="back">
		<div  id="box" class="center">
			<form action="login.php" method="post">

			<button id="btn-close">x</button>
			<h1>Login</h1>
			<input type="Email" name="email" placeholder="Email" id="ep">
			<input type="password" name="password" placeholder="password" id="ep"><br>
			<button class="btn btn-success" name="Login">Login</button><br><br>
			<a href="#"><strong>forgot password?</strong></a>
			
		</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

