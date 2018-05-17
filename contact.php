<?php
	include_once 'headerForOthers.php';
?>

	<div>
		<center><h1 style="margin-top: 100px;">CONTACT US TODAY!</h1></center>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
			</div>	
			<div class="col-md-3">
				<h3 style="color: #B22222">Telephone</h3>
				<h4>Mob: +91-8381081869</h4>

				<h3 style="color: #B22222">Email</h3>
				<h4>sgmadankar@gmail.com</h4>
				
				<h3 style="color: #B22222">Opening Hours</h3>
				<h4>Mon - Sun: 7am - 10pm<br></h4>
			</div>
			<div class="col-md-7">
				<form class="form-horizontal" action="contactForm.php">
				    <div class="form-group" style="margin-top: 50px;">
				      <label class="control-label col-sm-2" for="Name">Name:</label>
				      <div class="col-sm-10">
				        <input type="text" class="form-control" id="name" placeholder="Enter Name *" name="name">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-sm-2" for="email">Email:</label>
				      <div class="col-sm-10">
				        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-sm-2" for="pwd">Problems:</label>
				      <div class="col-sm-10">          
				        <textarea type="text" class="form-control" id="problems" placeholder="Problems Or Services Required *" name="problems" cols="5">
				        </textarea>
				      </div>
				    </div>
				    <div class="form-group">        
				      <div class="col-sm-offset-2 col-sm-10">
				        <button type="submit" class="btn btn-default" style="background-color: #B22222;color: white;" ><h5> SUBMIT</h5></button>
				      </div>
				    </div>
				 </form>
				
			</div>
		</div>
		
	</div>
	<br><br>

        <!-- Google Map -->
        <div id="map" style="width:100%;height:500px"></div>

        <script>
            function myMap() {
              var myCenter = new google.maps.LatLng(16.845702,74.601275);
              var mapCanvas = document.getElementById("map");
              var mapOptions = {center: myCenter, zoom: 8};
              var map = new google.maps.Map(mapCanvas, mapOptions);
              var marker = new google.maps.Marker({position:myCenter});
              marker.setMap(map);
            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbunfNfWmrTzqkdbXGKw8uRI9Pwi01Oe8&callback=myMap"></script>

<?php
	include_once 'footer.php';
?>