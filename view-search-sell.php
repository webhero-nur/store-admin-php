<?php

require_once "connection.php";

$order_id = $_POST["search_sale_id"];

$similar_id = "SELECT * FROM sale_record WHERE order_id='$order_id'";

$run_sale = mysqli_query($conn, $similar_id);

$row_count = mysqli_num_rows($run_sale);

if ($row_count==0)
{
	echo "<script>alert('Invalid ID')</script>";
}

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
					<center><label style="color: white;"><h1>My Shop | Search Result</h1></label></center>

					<br>

					<table border="1" align="center" width="714px" style="color:white; background-color: black; border-color: white;">
						
						<tr>
							<th><h2>Sell ID</h2></th>
							<th><h2>Item Name</h2></th>
							<th><h2>Quantity</h2></th>
							<th><h2>Price</h2></th>
						</tr>

						<?php

						$sql = "SELECT * FROM sale_record WHERE order_id = '$order_id'";

						$result = $conn->query($sql);

						if($row_sales = $result->fetch_array())
						{
							echo "<tr>
							<th>" . $row_sales['order_id'] . "</th>
							<th>" . $row_sales['item_name'] ."</th>
							<th>" . $row_sales['quantity'] ."</th>
							<th>" . $row_sales['price'] ."</th>
						</tr>";						
						}

						?>
						
					</table>

					<br><br>

					<a href="search-sell.php"><button>Back</button></a>

				</div>
			</div>
		</div>

		<div class="footer">
		<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2022 all rights reserved | Developed By: <a href="https://github.com/webhero-nur/"><u>NUR</u></a></h5>
		</div>

	</div>

</body>
</html>