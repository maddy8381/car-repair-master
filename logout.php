<?php
	
	session_start();
	unset($_SESSION['email']);
	unset($_SESSION['name']);
	session_destroy();
	echo "<script type='text/javascript'>
     window.location.href='bookOnline.php'</script>";

?>