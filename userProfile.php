<?php 
	include_once 'header_AfterLogin.php';

	if(!isset($_SESSION['name']))
	{
		session_unset();

	     echo '<script language="javascript">';
	            echo 'window.location.href="bookOnline.php";';
	     echo '</script>';
	}
?>
<div id="loginFormDiv" class="container">
		<center><h1>Change Password</h1></center>
		<br>
		<div id="checkChangePassword" style="color: red;font-size: 15px;text-align: center;"></div>
		
       <form>
		    <label for="fname">Current Password</label>
		    <input type="password" placeholder="Enter Current Password *" id="currPassword" class="loginInputAndSelect" required>
		    <small id="errorcurrPassword" style="color: red"></small><br>


		    <label for="lname">New Password</label>
		    <input type="password"  placeholder="Enter New Password *" id="newPassword" class="loginInputAndSelect" required>
		    <small id="errornewPassword" style="color: red"></small><br>

		  

		    <label for="lname">Confirm Password</label>
		    <input type="password"  placeholder="Retype Password *" id="confirmNewPassword" class="loginInputAndSelect" required>
		    <small id="errorconfirmnewPassword" style="color: red"></small><br>


		</form>
		<input type="submit" value="SUBMIT"  onclick="changePassword();" id="changePassword" class="loginSubmitInput">
	</div>

<?php 
	include_once 'footer.php';
?>