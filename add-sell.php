<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>MyShop | Add Sell</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="styles/add-sell.css" media="all" />
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
					<form action="insert-sell-data.php" method="post">
						<center><label style="color: white;"><h1>My Shop | Add to Sell Record</h1></label></center>

						<br> <br>

						<center><label style="color:white; background-color: black;">Sell ID</label></center>
						<input type="text" required = "required" placeholder="Sell ID" id="add_sell_id" name="add_sell_id">

						<center><label style="color:white; background-color: black;">Item Name</label></center>
						<input type="text" required = "required" placeholder="Item Name" id="add_sell_name" name="add_sell_name">

						<center><label style="color:white; background-color: black;">Quantity</label></center>
						<input type="text" required = "required" placeholder="Quantity" id="add_sell_quantity" name="add_sell_quantity">

						<center><label style="color:white; background-color: black;">Total Price</label></center>
						<input type="text" required = "required" placeholder="Total Price" id="add_sell_price" name="add_sell_price">

						<br><br>

						<input type="submit" name="add_sell" value="Add to Sell Record"><br><br>
					</form>
				</div>
			</div>
		</div>

		<div class="footer">
		<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2022 all rights reserved | Developed By: <a href="https://github.com/webhero-nur/"><u>NUR</u></a></h5>
		</div>

	</div>

</body>
</html>