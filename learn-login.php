<?php
	include ('connection.php');
?>
<html>
<head>
</head>
<body>
	<form method="POST" action="show-data.php">
	<table>
	<tr>
		<td>Username:</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>		
		<td><input type="submit" name="submit"></td>
		<?php
			if(isset($_REQUEST['submit'])){
				
				$username = $_REQUEST['username'];
				$password = $_REQUEST['password'];
				
				$check = $link->rawQueryOne("select * from learn_user where username='$username' and password='$password'");
				
				if($check){
					session_start();
					$_SESSION['username'];	//$_SESSION is a super global
				}
				else{	
		?>
		<p style="color:red">Entered Username or Password is invalid</p>
		<?php
				}
			}	
		?>
	</tr>
	<table>
	</form>
</body>
</html>