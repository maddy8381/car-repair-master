<?php 
	include_once 'header_AfterLogin.php';
	if(!isset($_SESSION['name']))
	{
		session_unset();

	     echo '<script language="javascript">';
	            echo 'window.location.href="bookOnline.php";';
	     echo '</script>';
	}
	if(isset($_SESSION['service_id']))
	{
		unset($_SESSION['service_id']);
	}
?>
<div class="container-fluid" style="background-color: #ccccb3" >
	
<div class="container">
	<center><h1>BOOKING</h1></center>

	<div class="container" style="background-color: white;" >
		<div class="row">
			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="images/carChecks.PNG" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> CAR CHECKS</h3>
								<input type="hidden" name="service_id" value="1">
								<button type="submit" class="btn btn-danger" ><font size="5">Book Now</font></button>
							</div>
						
				</div>
			  </form>
				
			</div>

			
			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="images/tire_change.PNG" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> TIRE CHANGE</h3>
								<input type="hidden" name="service_id" value="2">
								<button type="submit" class="btn btn-danger" ><font size="5">Book Now</font></button>
							</div>
						
				</div>
			  </form>
				
			</div>


			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="images/oil_and_break_checks.png" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> OIL & BREAK CHECKS</h3>
								<input type="hidden" name="service_id" value="3">
								<button type="submit" class="btn btn-danger" ><font size="5">Book Now</font></button>
							</div>
						
				</div>
			  </form>
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="images/battery_change.png" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> BATTERY CHANGE</h3>
								<input type="hidden" name="service_id" value="4">
								<button type="submit" class="btn btn-danger" ><font size="5">Book Now</font></button>
							</div>
						
				</div>
			  </form>
				
			</div>

			
			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="images/breakDownService.PNG" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> BREAKDOWN SERVICE</h3>
								<input type="hidden" name="service_id" value="5">
								<button type="submit" class="btn btn-danger" ><font size="5">Book Now</font></button>
							</div>
						
				</div>
			  </form>
				
			</div>


			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="images/other_services.png" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> OTHER SERVICES</h3>
								<input type="hidden" name="service_id" value="6">
								<button type="submit" class="btn btn-danger" ><font size="5">Book Now</font></button>
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