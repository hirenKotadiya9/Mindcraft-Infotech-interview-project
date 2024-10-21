<?php
	$email = "";
	$password = "";
	
	if(isset($_COOKIE["email"])){
		$email = $_COOKIE["email"];
	}
	
	if(isset($_COOKIE["password"])){
		$password = $_COOKIE["password"];
	}

	if(isset($_POST["login"])){
		$email = $_POST["email"];
		$password = $_POST["password"];
		$remember = $_POST["remember"];
		
		$qry = "select * from register where email = '$email' and 
		password = '$password'";		
		
		$res = mysqli_query($con,$qry);
		if(mysqli_num_rows($res)>0){
			
			if($remember==1){
				setcookie("email",$email,strtotime("1 year"));
				setcookie("password",$password,strtotime("1 year"));
			}
			
			$row = mysqli_fetch_assoc($res);
			
			$_SESSION["id"] = $row["id"];
			$_SESSION["fullname"] = $row["firstname"]." ".$row["lastname"];
			
			header("location:home.php");
			exit;
		}else{
			$_SESSION["msg"] = "Email/Password wrong";
			header("location:index.php");
			exit;
		}
	}
?>