<?php
	session_start();
	require_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>MyShop | Admin Reset Password</title>
	<link rel="stylesheet" type="text/css" href="styles/utility.css">

</head>

<body style="background-image: url(images/login-bg.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
	
	<h1 style="color:white; text-align:center;">My Shop</h1>

	<hr>
	<h2 style="color:white; text-align:center;">** To be used by admin only **</h2>
	<hr><br><br>

<div class="mx-auto" style="background-color: lightgray; border-radius: 5px; margin-bottom: 15px;">
	<form action="admin_reset_pass_done.php" method="post">
	<center><label style="color:white; background-color: black; font-size:30px;">Reset Password</label></center><br><br>

	<center><label style="color:white; background-color: black;" for="email">Email</label></center>
	<input type="email" required="required" placeholder="admin@gmail.com" name="admin_email">

	<center><label style="color:white; background-color: black;">Select Question</label></center>
	<select required="required" id="rp_select_ques" name="rp_select_ques">
		<option value="" selected>~~ Please choose an option ~~</option>
		<option value="Where is your birth place?">Where is your birth place?</option>
		<option value="What is your favourite food?">What is your favourite food?</option>
	</select>

	<center><label style="color:white; background-color: black;">Your Answer</label></center>
	<input type="text" required="required" placeholder="Your Answer" name="rp_your_ans">
 
	<center><label style="color:white; background-color: black;"for="Apass">New Password</label></center>
	<input type="password" required="required" placeholder="********" name="rp_new_password">

	<br><br>

	<input type="submit" name="reset_pass" value="Reset Password">
	</form>

	<br>

	<a href="index.php"><button>Back</button></a>

</div><br><br>

<div class="footer">
	<h5 style="text-align:center; font-family: Verdana, Geneva, sans-serif; color: white;">&copy; 2022 all rights reserved | Developed By: <a href="https://github.com/webhero-nur/" style="color:white;">NUR</a></h5>
</div>

</body>
</html>