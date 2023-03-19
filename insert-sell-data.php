<?php

require_once "connection.php";

$order_id = $_POST["add_sell_id"];
$item_name = $_POST["add_sell_name"];
$quantity = $_POST["add_sell_quantity"];
$price = $_POST["add_sell_price"];

$sql = "INSERT INTO sale_record (order_id, item_name, quantity, price) VALUES ('$order_id', '$item_name', '$quantity', '$price')";

if (mysqli_query($conn, $sql))
{
	echo "<script>alert('Sale added successfully!')</script>";
	echo "<script>window.open('sale-record-btn.php','_self')</script>";
}
else
{
	echo "<script>alert('Failed! Please try again later.')</script>";
	echo "<script>window.open('add-sell.php','_self')</script>";
}

mysqli_close($conn);

?>