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
           <h1 align="center">Group 2 Schedule</h1> 
        </div><br><br>
      <div class="box-body table-responsive">
        <table class="table table-hover">
        <tr>
	        <th>#</th>    
	        <th>Date</th>    
	        <th>08:00 am</th>    
	        <th>10:00 am</th>    
	        <th>12:00 pm</th>    
	        <th>02:00 pm</th>    
	        <th>04:00 pm</th>
          <th>06:00 pm</th>
          <th>08:00 pm</th>   
        </tr>
            <?php
        	    $con=mysqli_connect("localhost","root","","car-repair-master");
			       	$query = "SELECT * FROM schedule_group2";
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
                        if($row['time8am'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }

	                     if($row['time10am'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }

                        if($row['time12pm'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }

                        if($row['time2pm'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }

                        if($row['time4pm'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }

                        if($row['time6pm'] == 1)
                        {
                          echo "<td><b>YES</b></td>";
                        }
                        else
                        {
                          echo "<td>NO</td>";
                        }

                        if($row['time8pm'] == 1)
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