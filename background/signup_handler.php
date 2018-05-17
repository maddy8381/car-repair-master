<?php 
	$name = $_GET['name'];
	$email = $_GET['email'];
	$password = md5($_GET['password']);
	$contact_no = $_GET['contact_no'];
	
	require '../include/db_config.php';
	require '../vendor/autoload.php'; //for PHP mailer
	use PHPMailer\PHPMailer\PHPMailer;
	
	$db = new Database();
	$conn = $db->getConnection();

	$cnt = 0;

	$active_hash = $db->randomString();

	$query = "SELECT email FROM members where email = '$email'";

	$q = $conn->query($query);
		
	$q->setFetchMode(PDO::FETCH_ASSOC);
		
	while ($r = $q->fetch()) {
		$cnt++;
	}
	if($cnt == 0){

		/*$email1 = urlencode($email);
		$message = 'This e-mail is sent via CAR REPAIR MASTER. Please click on the link to verify <a href="https://wcehackathon.in/background/verify.php?email='.$email1.'&active_hash='.$active_hash.'">https://wcehackathon.in/background/verify.php?email='.$email1.'&active_hash='.$active_hash.'</a>';


		$mail = new PHPMailer;
		$mail->isMail();
		$mail->setFrom('sgmadankar@gmail.com', 'Shubham Madankar');
		$mail->addAddress($email);
		
		$mail->Username = 'sgmadankar@gmail.com';                
	        $mail->Password = '191111989'; 
		$mail->addCustomHeader('X-SES-CONFIGURATION-SET', 'ConfigSet');
		$mail->Host = 'smtp.gmail.com'; 
		$mail->Subject = 'Verification of CAR REPAIR MASTER';
		$mail->Body    = $message;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		// $mail->setFrom('admin@wcehackathon.in', 'WCE Hackathon');


		$mail->isHTML(true);
		
		if($mail->send()){
		*/
		$query = "INSERT INTO members(id, name, email, mobile_no,password, active_hash, recovery_hash, status) values ('','$name', '$email',  '$contact_no', '$password','$active_hash', '', 100)";
		
		$conn->query($query);
		
		echo '<div class="alert alert-success">
						  <strong>Registered Successfully.</strong> Verification link would be sent to <strong>'.$email.'</strong> within 10 minutes. Please verify your account.<br>
			</div>';
		/* }
	    else{
			echo '<div class="alert alert-danger">
							  <strong>Contact to 8381081869</strong> 
				</div>';
		}*/
	}
	else{
		echo $cnt;
	}
?>