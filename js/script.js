
//Registration
function registration(){
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var contact_no = document.getElementById('mobileNumber').value;
	var password = document.getElementById('password').value;
	var confirmPassword = document.getElementById('confirmPassword').value;
	

	if(name == ""){
		document.getElementById('errorName').innerHTML = 'Name is required';
	}
	else if (email == "") {
		document.getElementById('errorName').innerHTML = '';
		document.getElementById('errorEmail').innerHTML = 'Email is required';
	}
	else if (contact_no == "") {
		document.getElementById('errorEmail').innerHTML = '';
		document.getElementById('errorMobile').innerHTML = "Mobile Number is required";
	}
	else if (confirmPassword != password) {
		document.getElementById('errorMobile').innerHTML = '';
		document.getElementById('errorPassword').innerHTML = "Password does not match";
	}
	else if(validateEmail(email) == false){
		document.getElementById('errorPassword').innerHTML = '';
		document.getElementById('errorEmail').innerHTML = 'Please Enter valid Email-Address';
	}
	else {
		document.getElementById('errorName').innerHTML = '';
		document.getElementById('errorEmail').innerHTML = '';
		document.getElementById('errorMobile').innerHTML = '';
		document.getElementById('errorPassword').innerHTML = '';

		register(name,email, contact_no,password);
	}
}


function register(name,email, contact_no,password){
	if(document.getElementById("submit").value == "SUBMIT"){
		document.getElementById("submit").value = "SUBMITTING...";
	}

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var flg = this.responseText;
			if(flg == 1){
				document.getElementById('errorEmail').innerHTML = "This Email already exist";
				if(document.getElementById("submit").value == "SUBMITTING..."){
					document.getElementById("submit").value = "SUBMIT";
				}
			}
			else{
				document.getElementById('confirmRegistration').innerHTML = flg;
			}	
		}
	};

	xhttp.open("GET", "background/signup_handler.php?name="+name+"&email="+email+"&contact_no="+contact_no+"&password="+password, true);
	xhttp.send();

}

//login function

function login(){

	if(document.getElementById("login").value == "LOGIN"){
		document.getElementById("login").value = "LOGGING...";
	}

	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	var checkAdmin = 0;

	if(document.getElementById('loginType').checked == true)
		checkAdmin = 1;
	else
		checkAdmin = 0;
	

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
				var flg = this.responseText;
			   
				if(flg == 12345)
				{
					window.location.href = "adminTodaysBooking.php";
				}
			    else if(flg == 0){
					document.getElementById('checkLogin').innerHTML = '<div class="alert alert-danger"><strong>Login Failed!</strong> Please enter valid credentials or verify your account if not.</div>';
					if(document.getElementById("login").value == "LOGGING..."){
							document.getElementById("login").value = "LOGIN";
							document.getElementById('password').value="";
						}
				}
				else{
					window.location.href = "main_bookingPage.php";
				}

		}
	};

	xhttp.open("GET", "background/login_handler.php?email="+email+"&password="+password+"&checkAdmin="+checkAdmin, true);
	xhttp.send();
}




function validateEmail(email) {
    var x = email;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        return false;
    }
    return true;
}


//function change password


function changePassword(){

	var currPassword = document.getElementById('currPassword').value;
	var newPassword = document.getElementById('newPassword').value;
	var confirmNewPassword = document.getElementById('confirmNewPassword').value;

	if(currPassword == '')
	{
		document.getElementById('errorcurrPassword').innerHTML = 'Current Password required';
	}
	else if(newPassword == '')
	{
		document.getElementById('errorcurrPassword').innerHTML = '';
		document.getElementById('errornewPassword'). innerHTML = 'New Password required';
	}
	else if(newPassword != confirmNewPassword)
	{
		document.getElementById('errorcurrPassword').innerHTML = '';
		document.getElementById('errornewPassword'). innerHTML = '';
		document.getElementById('errorconfirmnewPassword').innerHTML = 'Password does not match';
	}
	else
	{
		if(document.getElementById("changePassword").value == "SUBMIT"){
		document.getElementById("changePassword").value = "SUBMITTING...";
		}

		document.getElementById('errorcurrPassword').innerHTML = '';
		document.getElementById('errornewPassword'). innerHTML = '';
		document.getElementById('errorconfirmnewPassword').innerHTML = '';
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
						var flg = this.responseText;
							
						if(flg == 0){
							document.getElementById('checkChangePassword').innerHTML = '<div class="alert alert-danger"><strong>Password Wrong!</strong> Please enter valid Account Password</div>';
							if(document.getElementById("changePassword").value == "SUBMITTING..."){
									document.getElementById("changePassword").value = "SUBMIT";
								}
							document.getElementById('currPassword').value = '';
							document.getElementById('newPassword'). value = '';
							document.getElementById('confirmNewPassword').value = '';
						}
						else{

							document.getElementById('checkChangePassword').innerHTML = '<div class="alert alert-success"><strong>Password Successfully Changed!</strong></div>';
							if(document.getElementById("changePassword").value == "SUBMITTING..."){
									document.getElementById("changePassword").value = "SUBMIT";
								}

							document.getElementById('currPassword').value = '';
							document.getElementById('newPassword'). value = '';
							document.getElementById('confirmNewPassword').value = ''
						}

				}
			};

			xhttp.open("GET", "background/userProfile_handler.php?currPassword="+currPassword+"&newPassword="+newPassword, true);
			xhttp.send();


	}

}


function changeAdminPassword(){

	var currPassword = document.getElementById('currPassword').value;
	var newPassword = document.getElementById('newPassword').value;
	var confirmNewPassword = document.getElementById('confirmNewPassword').value;

	if(currPassword == '')
	{
		document.getElementById('errorcurrPassword').innerHTML = 'Current Password required';
	}
	else if(newPassword == '')
	{
		document.getElementById('errorcurrPassword').innerHTML = '';
		document.getElementById('errornewPassword'). innerHTML = 'New Password required';
	}
	else if(newPassword != confirmNewPassword)
	{
		document.getElementById('errorcurrPassword').innerHTML = '';
		document.getElementById('errornewPassword'). innerHTML = '';
		document.getElementById('errorconfirmnewPassword').innerHTML = 'Password does not match';
	}
	else
	{
		if(document.getElementById("changePassword").value == "SUBMIT"){
		document.getElementById("changePassword").value = "SUBMITTING...";
		}

		document.getElementById('errorcurrPassword').innerHTML = '';
		document.getElementById('errornewPassword'). innerHTML = '';
		document.getElementById('errorconfirmnewPassword').innerHTML = '';
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
						var flg = this.responseText;
							
						if(flg == 0){
							document.getElementById('checkChangePassword').innerHTML = '<div class="alert alert-danger"><strong>Password Wrong!</strong> Please enter valid Account Password</div>';
							if(document.getElementById("changePassword").value == "SUBMITTING..."){
									document.getElementById("changePassword").value = "SUBMIT";
								}
							document.getElementById('currPassword').value = '';
							document.getElementById('newPassword'). value = '';
							document.getElementById('confirmNewPassword').value = '';
						}
						else{

							document.getElementById('checkChangePassword').innerHTML = '<div class="alert alert-success"><strong>Password Successfully Changed!</strong></div>';
							if(document.getElementById("changePassword").value == "SUBMITTING..."){
									document.getElementById("changePassword").value = "SUBMIT";
								}

							document.getElementById('currPassword').value = '';
							document.getElementById('newPassword'). value = '';
							document.getElementById('confirmNewPassword').value = ''
						}

				}
			};

			xhttp.open("GET", "background/adminProfile_handler.php?currPassword="+currPassword+"&newPassword="+newPassword, true);
			xhttp.send();


	}

}



