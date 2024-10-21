<?php
	include "include/connection.php";
	
	if(!isset($_SESSION["id"])){
		$_SESSION["msg"] = "Please login to, Access this page";
		header("location:index.php");
		exit;
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Home</title>
	</head>
	<body>
		<h1>Welcome, <?php echo $_SESSION["fullname"]; ?></h1>
		<h3><a href="change-password.php">Change Password</a></h3>
		<h3><a href="logout.php">Logout</a></h3>
	</body>
</html>