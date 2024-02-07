<?php
	include ('connection.php'); 
	
	$cart_id = $_GET['cart_id'];
	$quantity = $_REQUEST['quantity'];
	
	$update = $link->rawQueryOne("UPDATE cart SET quantity='$quantity' where cart_id=?",array($cart_id));

?>
<span>Your Product is successfully updated.<a href="cart.php">Click Here</a>to go back to cart.</span>
