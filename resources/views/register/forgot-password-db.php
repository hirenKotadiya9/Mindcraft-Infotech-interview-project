<?php
	if(isset($_POST["forgotpassword"])){
		$email = $_POST["email"];
		
		$qry = "select * from register where email like '$email'";
		$res = mysqli_query($con,$qry);
		
		if(mysqli_num_rows($res)>0){
			$row = mysqli_fetch_assoc($res);
			
			$to = $email;
			$subject = "Your Password";
			$message = "Hello User Your Password is: ".$row["password"];
			$from = "From: nitin@careerinfoway.com";
			
			if(mail($to,$subject,$message,$from)){
				$_SESSION["msg"] = "Your password has been sent on your email address";
			}else{
				$_SESSION["msg"] = "Failed";
			}
			
			header("location:index.php");
			exit;
		}else{
			$_SESSION["msg"] = "This Email Address is not Registered";
			
			header("location:forgotpassword.php");
			exit;
		}
	}
?>