<?php
	include_once 'headerForOthers.php';
?>



	<div id="loginFormDiv" class="container">
		<center><h1>Log in</h1></center>

        <div id="checkLogin" style="color: red;font-size: 15px;text-align: center;"></div>
		<form action="test2.php" method="POST">
		    <label for="fname">Email</label>
		    <input type="email"  name="email" placeholder="Enter Email *" id="email" class="loginInputAndSelect" required>

		    <label for="lname">Password</label>
		    <input type="password"  name="password" placeholder="Enter Password *" id="password" class="loginInputAndSelect" required><br>
		    <input type="checkbox" name="admin" value="admin" id="loginType" style="width: 15px;height: 15px;"> <small>Login as Admin</small><br>
			<input type="submit" value="LOGIN" id="login" class="loginSubmitInput">
		  
		</form>
		<center>
			<h3>Don't have an account?<a href="signup.php" style="color: black;"> Sign up</a></h3>
		<center>
	</div>
<?php
	include_once 'footer.php';
?>