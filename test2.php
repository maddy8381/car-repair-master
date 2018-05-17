<?php
	
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$loginType = $_POST['admin'];

	echo $loginType;
?>