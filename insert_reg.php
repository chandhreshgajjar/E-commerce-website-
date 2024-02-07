<?php
	include ('connection.php');
	
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$phone = $_REQUEST['phone'];
	
	$reg = $link->insert("user",array("email"=>$email,"password"=>$password,"phone"=>$phone));
	
	$fetch = $link->rawQueryOne("select * from user where email='$email' and password='$password'");
	
	if($reg and $fetch){
		session_start();
		$_SESSION['user_id'] = $fetch['user_id'];
		$_SESSION['email'] = $fetch['email'];
		header ('location:index.php');
	}
	else{
		header ('location:register.php');
	}
?>