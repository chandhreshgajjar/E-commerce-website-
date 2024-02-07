<?php
	session_start();
	include ('connection.php');
	
	$product_id = $_GET['product_id'];
	$category_id = $_GET['category_id'];
	$user_id = $_SESSION['user_id'];
	
	$addWish = $link->insert("wishlist",array("user_id"=>$user_id,"product_id"=>$product_id,"category_id"=>$category_id));
	
	if($addWish){
		header ('location:wishlist.php');
	}
	else{
		header ('location:add-to-wishlist.php');
	}
	
?>