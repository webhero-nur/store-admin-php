<?php
	session_start();
	require_once "connection.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>MyShop | Search Sell</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="styles/view-all-sell.css" media="all" />
</head>
<body>
	<div class="wrapper">

		<div class="header">
			<a href="#"><img src="images/header.jpg"></a>
		</div>

		<div class="content_wrapper">
			<div class="right" style="background-image: url(images/right.jpg)">
				<div class="btn_hp">
					<br><br>
					<a href="home.php"><button class="btn-dsin">Home</button></a>
					<a href="sale-record-btn.php"><button class="btn-dsin">Sale Record</button></a>
					<a href="admins-button.php"><button class="btn-dsin">Admins</button></a>
					<a href="index.php"><button class="btn-dsin">Logout</button></a>

				</div>
			</div>
			<div class="left">
				<div class="middle">
					<center><label style="color: white;"><h1>My Shop | Search Sell Record</h1></label></center>

					<br><br><br><br><br>

					<form action="view-search-sell.php" method="post">

						<br>

						<input type="text" required = "required" placeholder="Please Enter Sell ID" name="search_sale_id">

						<input type="submit" value="Search Sale"><br><br>
					</form>

					<br>

					<a href="sale-record-btn.php"><button>Back</button></a>

				</div>
			</div>
		</div>

		<div class="footer">
		<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2022 all rights reserved | Developed By: <a href="https://github.com/webhero-nur/"><u>NUR</u></a></h5>
		</div>

	</div>

</body>
</html>