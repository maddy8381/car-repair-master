<?php
	include_once 'headerForOthers.php';
?>

	<div id="confirmRegistration" class="loginFormDiv container">
		<center><h1>Sign Up</h1></center>
	  <form>
	  	<label>Name</label>
	  	<input type="text" name="name" placeholder="Enter Name *" id="name" class="loginInputAndSelect" required>
	     <small id="errorName" style="color: red"></small><br>

	    <label for="fname">Email</label>
	    <input type="email"  name="email" placeholder="Enter Email *" id="email" class="loginInputAndSelect" required>
	    <small id="errorEmail" style="color: red"></small><br>
	     

	    <label for="fname">Mobile Number</label>
	    <input type="number"  name="mobileNumber" placeholder="Enter Mobile Number *" class="loginInputAndSelect" id="mobileNumber" required>
	    <small id="errorMobile" style="color: red"></small><br>
	     

	    <label for="lname">Password</label>
	    <input type="password"  name="password" placeholder="Enter Password *" class="loginInputAndSelect" id="password" required>
	    <small id="errorPass" style="color: red"></small><br>
	    
	    <label>Confirm Password</label>
	  	<input type="password" name="confirmPassword" placeholder="Enter Password Again *" id="confirmPassword" class="loginInputAndSelect" required>
	    <small id="errorPassword" style="color: red"></small><br>
       
	  </form>
	  <input type="submit" value="SUBMIT" onclick="registration();" id="submit" class="loginSubmitInput">
	   <center>
	    <h3>I'm already a member <a href="bookOnline.php" style="color: black;"> Log in</a></h3></center>
	</div>
<?php
	include_once 'footer.php';
?>