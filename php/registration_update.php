<?php
	session_start();

	include_once("superuser/mysql_connect.php");

	$name = strip_tags($_POST['name']);
	$user = strip_tags($_POST['username']);
	$pass = strip_tags($_POST['password']);

	$name = mysqli_real_escape_string($db_connect, $name);
	$user = mysqli_real_escape_string($db_connect, $user);
	$pass = mysqli_real_escape_string($db_connect, $pass);

	$insert = "INSERT INTO users (UserName, Type, UPass, Name) VALUES('$user', 'RU', '$pass', '$name')";

	$query = mysqli_query($db_connect, $insert);

	if(!$query)
	{
		die("Error");
	}

	//test
	//echo $name.$user.$pass;

	echo "Thank you for registering with Book Lover!<br>";
	echo "Your account has been created. Please return to the home page and login.<br>"

	//header("Location: ../ru_home.php")
?>

<html>
<body>
	<p><a href = "../home.html"> Click here </a> to return to the homepage. </p>
</body>
</html>