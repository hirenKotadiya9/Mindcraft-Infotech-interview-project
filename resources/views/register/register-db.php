<?php
	if(isset($_POST["addrecord"])){
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		// Email address is already register checking - Start
		$qry1 = "select * from register where email like '$email'";
		$res1 = mysqli_query($con,$qry1);
		if(mysqli_num_rows($res1)>0){
			$_SESSION["msg"] = "This email is already registered, Try again with new email";
			header("location:register.php");
			exit;
		}
		// Email address is already register checking - End
		
		$qry2 = "insert into register (firstname,lastname,email,password) 
			values('$firstname','$lastname','$email','$password')";
			
		if(mysqli_query($con,$qry2)){
			$_SESSION["msg"] = "Register Successfully";
			header("location:index.php");
			exit;
		}else{
			$_SESSION["msg"] = "Failed to register";
			header("location:register.php");
			exit;
		}
	}
?>