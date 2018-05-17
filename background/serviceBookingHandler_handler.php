<?php
	include_once '../header_AfterLogin.php';
?>

<?php


	$service_name = $_POST['service_name'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];



	$selectedDate = strtotime($date);
	$selectedDate = date('M j, Y', $selectedDate);
	$diff = date_diff(date_create(date("M j, Y")),date_create($selectedDate));
	$days ="". $diff->format("%r%a");
	if($days<0)
	{
		$_SESSION['dateError'] = 1;
		echo '<script language="javascript">window.location.href = "../serviceBookingHandler.php"</script>';
	}

	if($time%2 == 0)
	{
		$groupId= 2;
	}	
	else
	{
		$groupId = 1;
	}



	$con=mysqli_connect("localhost","root","","car-repair-master");
		

	$timeName = "";
	if($groupId == 1)
	{
		if($time == 7)
		{
			$timeName = "time7am";
		}
		else if($time == 9)
		{
			$timeName = "time9am";
		}
		else if($time == 11)
		{
			$timeName = "time11am";
		}
		else if($time == 13)
		{
			$timeName = "time1pm";
		}
		else if($time == 15)
		{
			$timeName = "time3pm";
		}	
		else if($time == 17)
		{
			$timeName = "time5pm";
		}
		else
		{
			$timeName = "time7pm";
		}
		$query = "SELECT * FROM schedule_group1 where date = '".$date."' and ".$timeName."= '0'";
		$result=mysqli_query($con,$query);
		$rowcount=mysqli_num_rows($result);
		if($rowcount == 0)
		{
			$_SESSION['timeNotAvailable'] = 1;
			echo '<script language="javascript">window.location.href = "../serviceBookingHandler.php"</script>';


		}
		else
		{
			$query = "UPDATE schedule_group1 SET ".$timeName." = '1' WHERE   date = '".$date."' and ".$timeName." = '0'";
			if(mysqli_query($con,$query))
			{
				$query = "INSERT INTO booking(id,name,email,date,service_name,timing,worker_group_name) values('','$name','$email','$date','$service_name','$timeName','Group 1')";
				mysqli_query($con,$query);
							
					
			}
			?>
			sbfsj
			
			<?php 
		}
		  
		
		
	}
	else
	{
		if($time == 8)
		{
			$timeName = "time8am";
		}
		else if($time == 10)
		{
			$timeName = "time10am";
		}
		else if($time == 12)
		{
			$timeName = "time12pm";
		}
		else if($time == 14)
		{
			$timeName = "time2pm";
		}
		else if($time == 16)
		{
			$timeName = "time4pm";
		}	
		else if($time == 18)
		{
			$timeName = "time6pm";
		}
		else
		{
			$timeName = "time8pm";
		}

		$query = "SELECT * FROM schedule_group2 where date = '".$date."' and ".$timeName."= '0'";
		$result=mysqli_query($con,$query);
		$rowcount=mysqli_num_rows($result);
		if($rowcount == 0)
		{
			$_SESSION['timeNotAvailable'] = 1;
			echo '<script language="javascript">window.location.href = "../serviceBookingHandler.php"</script>';


		}
		else
		{
			$query = "UPDATE schedule_group2 SET ".$timeName." = '1' WHERE   date = '".$date."' and ".$timeName." = '0'";
			if(mysqli_query($con,$query))
			{
				$query = "INSERT INTO booking(id,name,email,date,service_name,timing,worker_group_name) values('','$name','$email','$date','$service_name','$timeName','Group 2')";
				mysqli_query($con,$query);
							
				echo '<script language="javascript">window.location.href = "../servicead.php"</script>';	
			}
		}
		  

	}

	
	

?>



	
