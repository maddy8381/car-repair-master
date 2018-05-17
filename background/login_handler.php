<?php
	
	$email = $_GET['email'];
	$password = md5($_GET['password']);
	$checkAdmin = $_GET['checkAdmin'];
	$status = 101;
	
	require '../include/db_config.php';
    $db = new Database();
	$conn = $db->getConnection();
	if($checkAdmin == 0)
	{

		

		$query = "SELECT * FROM members WHERE email = '$email' and password = '$password' and status = '$status'";

		$q = $conn->query($query);
		$cnt=0;		
		if($q->setFetchMode(PDO::FETCH_ASSOC))
		{
			
			while ($r = $q->fetch()) {
				 $name = $r['name'];
				 $email = $r['email'];
				 $mobile_no = $r['mobile_no'];
				 $cnt++;
			}
			
		}
		if($cnt==0)
			{
				echo $cnt;
			}
			else{
				session_start();
				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;
				$_SESSION['mobile_no'] = $mobile_no;
				echo $cnt;
		}
	}
	else
	{
		$query = "SELECT * FROM admin WHERE email = '$email' and password = '$password'";

		$q = $conn->query($query);
		$cnt=0;		
		if($q->setFetchMode(PDO::FETCH_ASSOC))
		{
			
			while ($r = $q->fetch()) {
				 $name = $r['name'];
				 $email = $r['email'];
				 $mobile_no = $r['mobile_no'];
				 $cnt++;
			}
			
		}
		if($cnt==0)
			{
				echo $cnt;
			}
			else{
				session_start();
				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;
				$_SESSION['mobile_no'] = $mobile_no;
				echo "12345";
		}

	}
?>



	
