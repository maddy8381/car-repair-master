<?php 
	session_start();
	$currPassword = md5($_GET['currPassword']);
	$newPassword = md5($_GET['newPassword']);
	$email = $_SESSION['email'];

	require '../include/db_config.php';
	$db = new Database();
	$conn = $db->getConnection();
	$cnt = 0;

	$query = "SELECT email FROM members where email = '$email' and password = '$currPassword' ";
	$q = $conn->query($query);
		
	$q->setFetchMode(PDO::FETCH_ASSOC);
	while ($r = $q->fetch()) {
		$cnt++;
	}


	if($cnt == 1){

		
		$query = "UPDATE members SET password = '$newPassword' where email = '$email'";
		
		if($conn->query($query))
		{
				echo '<div class="alert alert-success">
							  <strong>Password Changed Successfully.</strong><br>
				</div>';
		}
		else
		{
			echo '0';
		}
	}
	else{
		echo '0';
	}
	
?>