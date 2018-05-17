<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>Car-Repair-Master</title>

	<!-- Bootstrap -->
	
   <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<link rel="stylesheet" type="text/css" href="js/headerForOtherPages.css">
	<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


<style>
#loginInputAndSelect {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.loginInputAndSelect {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.loginSubmitInput {
    width: 100%;
    background-color: #4d4d4d;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


#loginFormDiv {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}


.loginFormDiv {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

@media only screen and (max-width: 2000px)
		{
			#loginFormDiv{
				width: 30%;
			}

			.loginFormDiv{
				width: 30%;
			}

		}
		@media only screen and (max-width: 500px)
		{
			#loginFormDiv{
				width: 100%;
			}

			.loginFormDiv{
				width: 100%;
			}
		}



	@media only screen and (max-width: 2000px)
		{
			#boxBooking{
				width: 350px;height: 280px;
			}

		}
		@media only screen and (max-width: 500px)
		{
			#boxBooking{
				width: 250px;height: 260px;
			}
		}

		@media only screen and (max-width: 2000px)
		{
			#marginLeftForDateTimeInput{
				margin-left: 50px;
			}

		}
		@media only screen and (max-width: 500px)
		{
			#marginLeftForDateTimeInput{
				margin-left: 0px;
			}
		}
</style>


</head>
<body>
	<div id="navbarDev">
		<div class="row">
			<div class="col-md-12">
				<img src="images/main-logo.png" style="height: 70px; display: inline-block; margin-left:20px; float:left">	
				<h3 style="color: white;"><b>CAR REPAIR MASTER</b></h3>
			</div>
							
    	</div>
					
		<nav class="navbar navbar-default navbar-inverse" style="color: white;">
			<div class="container">
				<div class="navbar-header">
					 <a class="navbar-brand" href="#"></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#list-elements">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="navbar-collapse collapse" id="list-elements">
					<ul class="nav navbar-nav navbar-right" style="float: right;">
						<li><a href="main_bookingPage.php">BOOKING</a></li>
		                <?php 

		                                if(isset($_SESSION['name'])){
		                                    echo '<a href="userProfile.php"><button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-user" style="margin-right: 5px;"></span>'.$_SESSION['name'].'</button></a>
		                            <a href="logout.php"><button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-log-in" style="margin-right: 5px;"></span>LOGOUT</button></a>';
		                                }

		                        ?>
              		</ul>
						
				</div>

			</div>		
		</nav>

	
	</div>
	<!--navbar end-->	