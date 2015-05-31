<?php
	$title= $_GET['title'];
	$author= $_GET['author'];
	$decision= $_GET['decision'];
	$price = $_POST['price'];
	$bid = $_POST['bid'];
	$length = $_POST['length'];
	session_start();
	if(isset($_SESSION['username']))
	{
		// put stored session variables into local PHP variables
		$user = $_SESSION['username'];
	}

	// make connect
	mysql_connect("localhost", "root", "root");
	// select database
	mysql_select_db("booksystem"); 

	if($decision == 'sell')
	{
	$put_on_mp = "INSERT INTO booksforsale VALUES ('$user', '$title', '$author', '$price', '$bid', CURDATE(), NULL, DATE_ADD(CURDATE(), INTERVAL '$length' DAY))";
	$posted_mp = mysql_query($put_on_mp);
	if($posted_mp){
	echo "Book is now being sold!";
	//usleep(4000000);
	//header("location: comment.php");
	}
	else {
	echo "Failed to sell book";
	//usleep(4000000);
	//header("location: comment.php");
	}
	}



	//header["location: comment.php"];
?>

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
			<center><h3>Selling Page</h3></center>
			<!-- End Header -->
			<br><br><br>
			<h3>
			<form id='selling' action='put_on_mp.php' method='post' accept-charset='UTF-8' enctype = "multipart/form-data">
				<fieldset >
					<legend>Set Prices and bids</legend><br>
					<input type='hidden' name='submitted' id='submitted' value='1'/>

					<label for='price' >Price(ddd.cc): </label>
					<input type='text' name='price' id='price' maxlength="6"/><br>
					
					<label for='bid' >Set Lowest Bid: </label>
					<input type='text' name='bid' id='bid' maxlength="6"/><br>
					
					<label for='length' >Number of Days: </label>
					<input type='text' name='length' id='length' maxlength="2"/><br>


					<input type='submit' name='Submit' value='Submit' />
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
