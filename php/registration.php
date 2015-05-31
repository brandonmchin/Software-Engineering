<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
	<head>
		<title>BookLover</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="css/images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
	</head>

	<body>
		<!-- Header -->
		<div id="header" class="shell">
			<a href="http://localhost/home.html"><img src="css/images/mainLogo.png" height=70 widht=80 /></a>
			<center><h3>Registration</h3></center>
			<!-- End Header -->
			<br><br><br>
			<h3>
			<form id='register' action='registration_update.php' method='post'>
				<fieldset >
					<legend>Register</legend><br>
					<input type='hidden' name='submitted' id='submitted' value='1'/>

					<table width='400' border='0'>
						<tr>
							<td><label for='name' >Full Name: </label></td>
							<td><input type='text' name='name' id='name' maxlength="20" /> </td>
						</tr>
						<tr>
							<td><label for='username' >Username:</label></td>
							<td><input type='text' name='username' id='username' maxlength="15" /></td>
						</tr>
						<tr>
							<td><label for='password' >Password:</label></td>
							<td><input type='password' name='password' id='password' maxlength="15" /> </td>
						</tr>
					<!--<label for='type' >User Type:</label>
					<select name="education">
						<option value="RU">Registered User</option>
						<option value="SE">Seller</option>
						<option value="SU">Super User</option>
					</select><br>-->
							 
					<!--<label for='balance' >Add Amount:</label>
					<input type='number' name='address' id='address' /><br>-->

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<tr>
							<td>&nbsp;</td>
							<td><input type='submit' name='Submit' value='Register' /></td>
						</tr>
					</table>
					<br><br>
				</fieldset>
			</form>
			</h3>
			<br><br><br>

	  	</div>
		<!-- End Main -->
		<!-- Footer -->
		<br>
		<center><b><font color=white>&copy;</font>&nbsp;<a href="#"><font color=white>BookLover</font></a></center>
		<br><br><br>
		<!-- End Footer -->
	</body>
</html>


