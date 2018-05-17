<?php 
	include_once 'header_AfterLogin.php';
?>
<?php
	if(!isset($_SESSION['name']))
	{
		session_unset();

	     echo '<script language="javascript">';
	            echo 'window.location.href="bookOnline.php";';
	     echo '</script>';
	}
	if(isset($_SESSION['service_id']))
	{
		$service_id = $_SESSION['service_id'];
	}
	else
	{
		$service_id = $_POST['service_id'];
		$_SESSION['service_id'] = $service_id;
	}
	$service_name = "";
	if($service_id == 1)
	{
		$service_name = "CAR CHECKS";
	}
	else if($service_id == 2)
	{
		$service_name = "TIRE CHANGE";
	}
	else if($service_id == 3)
	{
		$service_name = "OIL & BREAK CHECKS";
	}else if($service_id == 4)
	{
		$service_name = "BATTERY CHANGE";
	}else if($service_id == 5)
	{
		$service_name = "BREAKDOWN SERVICE";
	}else
	{
		$service_name = "OTHER SERVICES";
	}


?>



<div class="container-fluid" style="background-color: #ccccb3" >
	
<div class="container">
	<center><h1>BOOKING</h1></center>

	<div class="container" style="background-color: white;margin-bottom: 50px;"  >
		<div style="margin-top: 15px;">
			<a href="main_bookingPage.php"><button style="background-color: #B22222;color: white;"><font size="3">&lt;&lt;Back</font></button></a>
		</div>
		<br><br>
		<div>
			<font size="6" style="margin-left: 20px;">Schedule Online</font>
		</div>
		<div class="row">
				<form action="serviceBookingHandler_handler.php" method="POST">
					<div class="col-md-6"  style="margin-top: 50px;">
						<br><br><br>
						<div id="marginLeftForDateTimeInput">
									<font size="4">Select Date: </font><input type="date" name="date" style="background-color: black;font-size: 20px;color: white;" required="" id="date">
									<?php 
										if(isset($_SESSION['dateError']))
										{
											echo "<br><small style='color:red;'>Invalid Date</small>";
											unset($_SESSION['dateError']);
										}
									?>
								<br><br>
							<input type="hidden" name="service_name" value="<?php echo $service_name ?>">	
							<font size="4">Select Time: </font>
							<select name="time" style="background-color: black;font-size: 20px;color: white;" required id="time">
							  <option value="7">07:00 am</option>
							  <option value="8">08:00 am</option>
							  <option value="9">09:00 am</option>
							  <option value="10">10:00 am</option>
							  <option value="11">11:00 am</option>
							  <option value="12">12:00 pm</option>
							  <option value="13">01:00 pm</option>
							  <option value="14">02:00 pm</option>
							  <option value="15">03:00 pm</option>
							  <option value="16">04:00 pm</option>
							  <option value="17">05:00 pm</option>
							  <option value="18">06:00 pm</option>
							  <option value="19">07:00 pm</option>
							  <option value="20">08:00 pm</option>
							  <option value="21">09:00 pm</option>

							</select>
							<?php 
										if(isset($_SESSION['timeNotAvailable']))
										{
											echo "<br><small style='color:red;'>Booking Not Available</small>";
											unset($_SESSION['timeNotAvailable']);
										}
							?>

							
						</div>
					</div>
				<div class="col-md-6"  style="margin-top: 20px;">
				
						<div style="border: solid 2px; border-color: black;margin-bottom:50px;" id="boxBooking">
							<center>
								<h3><?php echo $service_name; ?> </h3>
							<h4>Max | 2 hr</h4>
							<br>
							<hr style="border-top: 3px double #8c8b8b;">
							<h4>CAR REPAIR MASTER</h4><br>
							<button type="submit" class="btn btn-danger" style="width: 200px;"><font size="4">SUBMIT</font></button>
							</center>
						</div>
					
				</div>
			</form>
			</div>		

			
		</div>
	</div>
</div>
<?php 
	include_once 'footer.php';
?>
 