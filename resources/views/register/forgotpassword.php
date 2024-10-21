<?php
	include "include/connection.php";
	include "forgot-password-db.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Forgot Password</title>
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
					<td>Email</td>
					<td>
						<input type="email" name="email" />
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="forgotpassword" value="Forgot Password" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>