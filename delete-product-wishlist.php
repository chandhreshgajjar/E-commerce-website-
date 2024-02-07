<?php
	session_start();
	include ('connection.php');
	$user_id = $_SESSION['user_id'];
	$wishlist_id = $_GET['wishlist_id'];
	$proDel = $link->rawQueryOne("delete from wishlist where wishlist_id=?",array($wishlist_id));
?>
<span>Your product is successfully deleted.<a href="wishlist.php">Click Here</a>to go back to wishlist</span>