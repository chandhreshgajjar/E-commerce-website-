<?php
	if(!isset($_SESSION['user_id'])){
?>
<a href="login.php"><button class="btn btn-md btn-black-default-hover mb-4" type="submit" id="submit" name="submit">login</button></a>
<?php
	}
	else{
?>
<span style="">Welcome <?php echo $_SESSION['email'];?></span>
<?php
	}
?>