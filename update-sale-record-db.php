<?php

require_once "connection.php";

$order_id = $_POST["add_sell_id"];
$item_name = $_POST["add_sell_name"];
$quantity = $_POST["add_sell_quantity"];
$price = $_POST["add_sell_price"];

$similar_id = "SELECT * FROM sale_record WHERE order_id='$order_id'";
 
$run_user = mysqli_query($conn, $similar_id);

$row_count = mysqli_num_rows($run_user);


if($row_count==1)
{
	$sql = "UPDATE sale_record SET item_name='$item_name', quantity='$quantity', price='$price' WHERE order_id='$order_id'";

	if(mysqli_query($conn, $sql))
	{
		echo "<script>alert('Sell information updated successfully!')</script>";
		echo "<script>window.open('sale-record-btn.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Failed! Please try again later.')</script>";
		echo "<script>window.open('update_member_info.php','_self')</script>";
	}

}
else
{
    echo "<script>alert('Invalid ID! Please, try again.')</script>";
    echo "<script>window.open('update_member_info.php','_self')</script>";
}

mysqli_close($conn);

?>