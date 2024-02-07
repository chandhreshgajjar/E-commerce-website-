<?php
	session_start();
	include ('connection.php');
		
		$category_id = $_GET['category_id'];
		$product_id = $_GET['product_id'];
		$quantity = 1;
		$user_id = $_SESSION['user_id'];
		$add = $link->insert("cart",array("user_id"=>$user_id,"product_id"=>$product_id,"quantity"=>$quantity,"category_id"=>$category_id));
		
		if($add){
			header ('location:cart.php');
			echo "No error";
		}
		else{
			header ('location:product-details.php');
			echo "Error";
		}
?>