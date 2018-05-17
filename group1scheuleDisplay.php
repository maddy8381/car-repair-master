<?php 
	include_once 'adminAllBookingHeader.php';
  if(!isset($_SESSION['name']))
  {
    session_unset();

       echo '<script language="javascript">';
              echo 'window.location.href="bookOnline.php";';
       echo '</script>';
  }

?>

<div class="row">
    <div class="col-md-2" style="margin-top: 45px;"> 
      <div class="container">
          <div class="btn-group-vertical">
            <button type="button" class="btn btn-primary" onclick="location.href='adminAllEntryData.php'">Bookings</button>
            <button type="button" class="btn btn-primary"  onclick="location.href='adminTodaysBooking.php'">Today's Booking</button>
              <button type="button" class="btn btn-primary" onclick="location.href='group1scheuleDisplay.php'">Group 1 </button>
              <button type="button" class="btn btn-primary" onclick="location.href='group2scheduleDisplay.php'">Group 2</button>
          </div>
      </div>
              
    </div>
    <div class="col-md-10" style="margin-top: 0px;">
        <?php
       
        
        ?>
        <div>
           <h1 align="center">Group 1 Schedule</h1> 
        </div><br><br>
      <div class="box-body table-responsive">
        <table class="table table-hover">
        <tr>
	        <th>#</th>    
	        <th>Date</th>    
	        <th>07:00 am</th>    
	        <th>09:00 am</th>    
	        <th>11:00 am</th>    
	        <th>01:00 pm</th>    
	        <th>03:00 pm</th>
          <th>05:00 pm</th>
          <th>07:00 pm</th>   
        </tr>
            <?php
        	    $con=mysqli_connect("localhost","root","","car-repair-master");
			       	$query = "SELECT * FROM schedule_group1";
                if($result=mysqli_query($con,$query))
                   {
                     if(mysqli_num_rows($result) > 0)
                     {
                        $sno=1;
                        while($row = mysqli_fetch_array($result))
                        {

                            echo "<tr>";

                        echo "<td>" . $sno . "</td>";
                        $sno=$sno+1;

                            
                        echo "<td>" . $row['date'] . "</td>";
                        if($row['time7am'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }

	                     if($row['time9am'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }

                        if($row['time11am'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }

                        if($row['time1pm'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }

                        if($row['time3pm'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }

                        if($row['time5pm'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }

                        if($row['time7pm'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }
                         
                      }
                   
                    }
               	}
               
             ?>
		 </table>
    </div>  
  </div>
</div>
  

  <?php
  	include_once 'footer.php';
  ?>