<?php

require_once "connection.php";

$a_email = $_POST["search_admin_email"];

$similar_email = "SELECT * FROM admin WHERE email='$a_email'";

$run_user = mysqli_query($conn, $similar_email);

$row_count = mysqli_num_rows($run_user);

if ($row_count==0)
{
	echo "<script>alert('Invalid E-mail!')</script>";
	echo "<script>window.open('search_admin.php','_self')</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>MyShop | Search Admin</title>
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
						<tr align="center">
							<td colspan="3"><h2></h2><br></td>
						</tr>
						
						<tr>
							<th><h2>Name</h2></th>
							<th><h2>E-mail</h2></th>
							<th><h2>Mobile</h2></th>
						</tr>

						<?php

						$sql = "SELECT * FROM admin WHERE email = '$a_email'";

						$result = $conn->query($sql);

						if($row_user = $result->fetch_array())
						{
							echo "<tr>
									<th>" . $row_user['name'] . "</th>
									<th>" . $row_user['email'] ."</th>
									<th>+880 " . $row_user['mobile'] ."</th>
								</tr>";						
						}

						?>

					</table>

					<br><br>

					<a href="search_admin.php"><button>Back</button></a>

				</div>
			</div>
		</div>

		<div class="footer">
		<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2022 all rights reserved | Developed By: <a href="https://github.com/webhero-nur/"><u>NUR</u></a></h5>
		</div>

	</div>

</body>
</html>