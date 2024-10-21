<?php
	include "include/connection.php";
	include "change-password-db.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Change Password</title>
	</head>
	<body>
		<form method="post">
			<table align="center" cellpadding="5">
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
					<td>Old Password</td>
					<td>
						<input type="password" name="oldpassword" />
					</td>
				</tr>
				<tr>
					<td>New Password</td>
					<td>
						<input type="password" name="newpassword" />
					</td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td>
						<input type="password" name="confirmpassword" />
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="changepassword" value="Change Password" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>