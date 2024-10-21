<?php
	if(isset($_POST["changepassword"])){
		$id = $_SESSION["id"];
		$oldpassword = $_POST["oldpassword"];
		$newpassword = $_POST["newpassword"];
		$confirmpassword = $_POST["confirmpassword"];
		
		if($newpassword == $confirmpassword && $newpassword!=""){
			
			if($oldpassword!= ""){			
				$qry1 = "select * from register where id=$id and password = '$oldpassword'";
				$res1 = mysqli_query($con,$qry1);
				
				if(mysqli_num_rows($res1)>0){
					$qry2 = "update register set password = '$newpassword' where id = $id";
					
					if(mysqli_query($con,$qry2)){
						$_SESSION["msg"] = "Your password has been changed, Kindly login to check the effect";
						header("location:index.php");
						exit;
					}else{
						$_SESSION["msg"] = "Password not updated";
						header("location:change-password.php");
						exit;
					}
				}else{
					$_SESSION["msg"] = "Old Password does not match";
					header("location:change-password.php");
					exit;
				}
			}else{
				$_SESSION["msg"] = "Please enter old password";
				header("location:change-password.php");
				exit;
			}
		}else{
			$_SESSION["msg"] = "Both password are different";
			header("location:change-password.php");
			exit;
		}
	}
?>