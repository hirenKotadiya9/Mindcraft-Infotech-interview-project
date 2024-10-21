<?php
	include "include/connection.php";
	include "index-db.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
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
						<input type="text" name="email" value="<?php echo $email; ?>" />
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="password" value="<?php echo $password; ?>" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="checkbox" name="remember" value="1" /> Remember My Password
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="login" value="Login" />
						<br/>
						<div align="right">
							<a href="forgotpassword.php">Forgot Password?</a><br/><br/>
							<a href="register.php">New User? Click Here to register</a>
						</div>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>