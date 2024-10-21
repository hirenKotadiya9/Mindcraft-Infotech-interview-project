<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
</head>
<body>
	<form>
		<table>
			<tr>
				<td>firstname</td>
				<td>
					<input type="text" name="firstname" placeholder="enter your firstname"/>
				</td>
			</tr>
			<tr>
				<td>lastname</td>
				<td>
					<input type="text" name="lastname" placeholder="enter your lastname"/>
				</td>
			</tr>
			<tr>
				<td>email</td>
				<td>
					<input type="email" name="email" placeholder="enter your email"/>
				</td>
			</tr>
			<tr>
				<td>password</td>
				<td>
					<input type="password" name="password" placeholder="enter your password"/>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</table>
	</form>
		<script type="text/javascript">
			function validation(){
				var firstname = document.getElementsById("firstname");
				var lastname = document.getElementsById("lastname");
				var email = document.getElementsById("email");
				var password = document.getElementsById("password");

				if(firstname.value.length==0){
					alert("plaese enter your firstname");
					firstname.focus();
					return false;
				}else if(lastname.value.length==0){
					alert("plaese enter your lastname");
					lastname.focus();
					return false;
				}else if(email.value.length==0){
					alert("plaese enter your email id");
					email.focus();
					return false;
				}else if(password.value.length==0){
					alert("plaese enter your password");
					password.focus();
					return false;
			}
		</script>
</body>
</html>