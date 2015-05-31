<?php
	$rateduser= $_GET['rateduser'];
	$decision= $_GET['decision'];
	$complaint = $_POST['complaint'];
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

	if($decision == 'comp')
	{
	$new_comp = "INSERT INTO complaints VALUES ('$rateduser', '$complaint')";
	$add_comp = mysql_query($new_comp);
	if($add_comp){
	$check_if_seller = "SELECT * FROM users WHERE UserName = '$rateduser' AND Type = 'SE'";
	if((mysql_num_rows($check_if_seller))>0){
	$sus_seller = "UPDATE users SET Activated = '0' WHERE UserName = '$rateduser'";
	mysql_query($sus_seller);
	$find_books_owned = "SELECT * FROM booksownedby WHERE UserName = '$rateduser'";
	$get_books_owned = mysql_query($find_books_owned);
	while($row = mysql_fetch_array($get_books_owned))
						{
							$title = $row['Title'];
							$author = $row['Author'];
							$sus_seller_books = "UPDATE books SET Activated = '0' WHERE Title = '$title' AND Author = '$author'";
							mysql_query($sus_seller_books);
							$row_index += 1;
						}
						}
	echo "Complaint Added!";
	//usleep(4000000);
	//header("location: comment.php");
	}
	else {
	echo "Complaint failed to be added";
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
			<center><h3>Complaint</h3></center>
			<!-- End Header -->
			<br><br><br>
			<h3>
			<form id='complaint' action='complain_seller.php' method='post' accept-charset='UTF-8' enctype = "multipart/form-data">
				<fieldset >
					<legend>New Complaint</legend><br>
					<input type='hidden' name='submitted' id='submitted' value='1'/>

					<label for='complaint' >Complaint: </label>
					<input type='text' name='complaint' id='complaint' maxlength="100"/><br>


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
