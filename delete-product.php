<?php
	session_start();
	include ('connection.php');
	$user_id = $_SESSION['user_id'];
	$cart_id = $_GET['cart_id'];
	$proDel = $link->rawQueryOne("delete from cart where cart_id=?",array($cart_id));
?>
<span>Your product is successfully deleted.<a href="cart.php">Click Here</a>to go back to cart</span>