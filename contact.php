<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<title>Contact us with mailing</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script src="https://www.fropoo.com/assets/js/jquery.validate.js" language="javascript" type="text/javascript" ></script>
	<script src="js/jquery.validate.min.js" language="javascript" type="text/javascript" ></script>
	<script src="js/jquery.form.js" language="javascript" type="text/javascript" ></script>
	
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Contact form</h1>
			<div class="col-md-6">
				<div id="frmContact">
					<div id="mail-status"></div>
					<form id="demo-test" method="POST">
					<div class="form-group">
						<label style="padding-top:20px;">First Name</label>
						<span id="userName-info" class="info"></span><br/>
						<input type="text" name="name" id="userName" class="demoInputBox form-control">
					</div>
					<div class="form-group">
						<label style="padding-top:20px;">Last Name</label>
						<span id="lastName-info" class="info"></span><br/>
						<input type="text" name="lastname" id="lastuserName" class="demoInputBox form-control">
					</div>
					<div class="form-group">
						<label>Email Address</label>
						<span id="userEmail-info" class="info"></span><br/>
						<input type="text" name="email" id="userEmail" class="demoInputBox form-control">
					</div>
					<div class="form-group">
						<label>Mobile Number</label>
						<span id="userEmail-info" class="info"></span><br/>
						<input type="number" name="mobile" id="mobile_number" class="demoInputBox form-control">
					</div>
					<div class="form-group">
						<label>DOB</label> 
						<span id="dateofbirth-info" class="info"></span><br/>
						<input type="date" name="dob" id="dateofbirthd" class="demoInputBox form-control">
					</div>
					<div class="form-group">
						<label> Address</label> 
						<span id="content-info" class="info"></span><br/>
						<textarea name="content" id="content" class="demoInputBox form-control" cols="60" rows="6"></textarea>
					</div>
				
						<button name="submit" class="btnAction" type="submit">Send</button>
					</form>
					<div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- validation and ajax -->

	<script>
	$(document).ready(function () {
		$("#demo-test").validate({
			rules: {
				name: "required",
				lastname: "required",
				email: {
					required: true,
					email: true,
					
				},
				mobile: {
					required: "#newsletter:checked",
					minlength: 2
				},
				dob: "required",
				content: "required",			
			},
			messages: {
				name: "Enter your firstname",
				email: "Enter your valid email id",				
			},		
			submitHandler: function (form) {
			$.ajax({
				type: "POST",
				url: "contact_mail.php",
				data: $(form).serialize(),
				success: function (response) {
					alert(response);
					// $(form).html("<div id='message'></div>");
					// $('#message').html("<h2>Your request is on the way!</h2>")
					// 	.append("<p>someone</p>")
					// 	.hide()
					// 	.fadeIn(1500, function () {
					// 	$('#message').append("<img id='checkmark' src='images/ok.png' />");
					// });
				}
			});
			return false; // required to block normal submit since you used ajax
		}
		});
		
	});

	</script>
</body>
</html>

