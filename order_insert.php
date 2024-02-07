<?php
	session_start();
	include ("connection.php");
	
	$user_id=$_SESSION['user_id'];
	$payment=$_REQUEST['paymentMethod'];
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$pincode=$_REQUEST['pincode'];
	$address=$_REQUEST['address'];
	$city=$_REQUEST['city'];
	$state=$_REQUEST['state'];
	$total=$_REQUEST['total'];
	$shipping=$_REQUEST['ship'];
	
	$user_insert = $link->rawQueryOne("UPDATE user set fname='$fname',lname='$lname',address='$address',city='$city',state='$state' where user_id=?",array($user_id));	//this query will insert the data into user table
	
	$fetch = $link->rawQuery("select * from cart join user on cart.user_id = user.user_id join product on cart.product_id = product.product_id join product_price on cart.product_id = product_price.product_id where user.user_id=?",array($user_id));
	if($link->count > 0){
		foreach($fetch as $f){
			$order_mail = $f['email'];
			$order_state = $f['state'];
			$order_city = $f['city'];
			$order_address = $f['address'];
			$order_phone = $f['phone'];
			$coupon_id = $f['coupon_id'];
		}
	}
	
	$op = $link->insert("order_product",array("payment_type"=>$payment,"user_id"=>$user_id,"Fname"=>$fname,"order_email"=>$order_mail,"order_state"=>$order_state,"order_city"=>$order_city,"order_pincode"=>$pincode,"order_address"=>$order_address,"phone"=>$order_phone,"order_total"=>$total,"coupon_id"=>$coupon_id,"cod_charge"=>$shipping)); //this query will insert data into table order product
	
	$fetchSec = $link->rawQuery("select * from cart join product_price on cart.product_id = product_price.product_id join order_product on order_product.user_id = cart.user_id where cart.user_id='$user_id' AND order_product.order_cancel=0");
	if($link->count > 0){
		foreach($fetchSec as $s){
			$product_id = $s['product_id'];
			$quantity = $s['quantity'];
			$price = $s['product_price'];
			$order_product_id = $s['order_product_id'];
			$category_id = $s['category_id'];
			$oi = $link->insert("order_item",array("user_id"=>$user_id,"product_id"=>$product_id,"quantity"=>$quantity,"price"=>$price,"order_product_id"=>$order_product_id,"category_id"=>$category_id));		//this query will insert data into order item table
		}
	}
	
?>
<p>Your Order is Successfully Placed<a href="index.php">Click Here</a>to continue shopping</p>