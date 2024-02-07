<?php
	if(isset($_REQUEST['addCart'])){
		$quantity = $_REQUEST['quantity'];
		
		$add = $link->insert("cart",array("user_id"=>$user_id,"product_id"=>$product_id,"quantity"=>$quantity,"category_id"=>$category_id));
		
		if($add){
			header ('location:cart.php');
			echo "No error";
		}
		else{
			header ('location:product-details.php');
			echo "Error";
		}
	}
?>