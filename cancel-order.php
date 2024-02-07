<?php
	session_start();
	$user_id = $_SESSION['user_id'];
	include ('connection.php');
	
	$order_product_id = $_GET['order_product_id'];
	
	$op = $link->rawQueryOne("update order_product set order_cancel=1 where order_product_id=?",array($order_product_id));
	
	$oi = $link->rawQueryOne("delete from order_item where order_product_id=?",array($order_product_id));
	
?>
<p>Your order is cancelled Successfully.<a href="index.php">Click Here</a>for continue shopping.</p>