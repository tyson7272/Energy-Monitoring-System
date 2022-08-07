<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<title>Reset Password</title>
</head>
<?php 

include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
        .second_box{
            display:none;
        }
        .field_error{
            color: red;
            text-align: center;
        }
    </style>

	<title>Login</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Reset Password</p>
			<div class="input-group first_box">
				<input type="email" placeholder="E-mail" name="email" id="email" required="required">
                <span id="email_error" class="field_error"></span>
			</div>
			
			<div class="input-group first_box">
				<button type="button" name="submit" class="btn" onclick="send_otp()">Generate OTP</button>
			</div>

            <div class="input-group second_box">
				<input type="text" placeholder="OTP" name="email" id="otp" required="required">
                <span id="otp_error" class="field_error"></span>
			</div>
			
			<div class="input-group second_box">
				<button type="button" name="submit" class="btn" onclick="submit_otp()">Submit OTP</button>
			</div>

			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p><br>
			<h4 class="login-register-text"><a href="index.php">Back to Login</a>.</h4>
		</form>
	</div>
    <script>
        function send_otp(){
            var email = jQuery('#email').val();
            jQuery.ajax({
                url:'send_otp.php',
                type: 'post',
                data:'email='+email,
                success:function(result){
                    if(result=='yes'){
                        jQuery('.second_box').show();
                        jQuery('.first_box').hide();
                    }
                    if(result=='not_exist'){
                        jQuery('#email_error').html('Please enter valid email');
                        
                    }
                }

            })
        }

    </script>
    
</body>
</html>