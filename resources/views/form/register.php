<?php
	include "include/connection.php";
	include "register-db.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<table border="0" align="center">
				<?php
					if(isset($_SESSION["msg"])){
				?>
				<tr>
					<td colspan="2" align="center">
						<?php echo $_SESSION["msg"]; ?>
					</td>
				</tr>
				<?php
						unset($_SESSION["msg"]);
					}
				?>
				<tr>
					<td>Enter First Name</td>
					<td>
						<input type="text" name="firstname" placeholder="Enter Your First Name" size="20" maxlength="10" />
					</td>
				</tr>
				<tr>
					<td>Enter Last Name</td>
					<td>
						<input type="text" name="lastname" placeholder="Enter Your Last Name" size="20" maxlength="20" />
					</td>
				</tr>
				<tr>
					<td>Enter Email Id</td>
					<td>
						<input type="email" name="email" placeholder="Enter Your Email" size="50" maxlength="100" />
					</td>
				</tr>
				<tr>
					<td>Enter Password</td>
					<td>
						<input type="password" name="password" placeholder="Enter Your Password" size="50" maxlength="50" />
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="addrecord" value="Submit" />
					</td>
				</tr>
				<tr>
					<td></td>
					<td align="right">
						<a href="index.php">Already Register? Click Here to login</a>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>