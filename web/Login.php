<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet" href="LoginForm.css" />
	</head>
	<body>
		<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
		<form name="form1" method="post" action="checklogin.php">
		<td>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
		<tr>
		<td colspan="3" style="font-family: Arial; color: #cc6600; font-size: 20px"><strong>WELCOME</strong></td>
		</tr>
		<tr>
		<!--<td width="78">Username</td>
		<td width="6">:</td>-->
		<td width="294"><input name="myusername" type="text" id="myusername" value="User Name"></td>
		</tr>
		<tr>
		<!--<td>Password</td>
		<td>:</td>-->
		<td><input name="mypassword" type="password" id="mypassword"></td>
		</tr>
		<tr>
		<!--<td>&nbsp;</td>
		<td>&nbsp;</td>-->
		<td><input type="submit" name="Submit" value="Login"></td>
		<td>Forgot password?</td>
		</tr>
		</table>
		</td>
		</form>
		</tr>
		</table>
	</body>
</html>