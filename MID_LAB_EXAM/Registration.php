<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

	<form method="post" action=""> 
		<fieldset>
			<legend>Registration</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="passWord"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirmPassword"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td>
						<input type="radio" name="type" value="User">User
						<input type="radio" name="type" value="Admin">Admin
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Sign Up">
						<a href="login.php"> Sign In </a>
					</td>
					
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>