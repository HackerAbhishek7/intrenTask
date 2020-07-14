<?php

if(isset($_POST['firstname'])){

	// Set Conncetion variables
	$server = "localhost";
	$username = "root";
	$password = "";

	// Create Connection 
	$con = mysqli_connect($server,$username,$password);

	// Check For The Conncection
	if(!$con){
		die("Connection is not created ". mysqli_connect_error());
	}
	// else {
	// 	echo "Connection Created Succesfully";
	// }

	// Collect Post Variables
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Excute The Sql Query
	$sql = "INSERT INTO `registration` . `registration` ( `firstname`, `lastname`, `phone`, `email`, `password`) VALUES ( '$firstname', '$lastname', '$phone', '$email', '$password');";

	// echo $sql;

	if($con -> query($sql) == true){

	}
	else{
		echo "Error Occured At Time Of Insertion";
	}

	// Close The Connection
	$con -> close();
}

?>

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
			background: rgba(0, 0, 0, 0.7);
			width: 100%;
			height: 100%;
			position: fixed;
			display: flex;
			justify-content: center;
			align-items: center;
			top:0;
		}
		#box{
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
			position: static;
			margin-left: 400px;
			top: 190px;
		}
		#btn-submit{
			outline: none;
			width: 60%;
		}

	</style>
</head>
<body>
	<div id="back">
		<div  id="box" class="center">
			<form action="registration.php" method="post">
			<button id="btn-close">x</button>
			<h1>Login</h1>
			<div id="register">
				<input type="text" name="firstname" placeholder="First Name" id="ep">
				<input type="text" name="lastname" placeholder="Last Name" id="ep">
				<input type="text" name="phone" placeholder="Phone No." id="ep">
				<input type="Email" name="email" placeholder="Email" id="ep">
				<input type="password" name="password" placeholder="password" id="ep"><br>
				<button class="btn btn-success" name="Login">Create Account</button><br><br>
			</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

