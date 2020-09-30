<?php 
     require_once "includes/db.php";
    require_once "includes/header.php";
?>
<?php
//require_once "includes/navigation.php"; 
if(isset($_POST['signup'])){
	$_SESSION['full_name'] = $_POST['full_name'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['phone'] = $_POST['phone'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['confirm_password'] = $_POST['confirm_password'];
	if($_SESSION['password']==$_SESSION['confirm_password']){ 
     $_SESSION['otp']=rand();
	 ini_set('display_errors', 1);
			require_once 'PHPMailer/PHPMailerAutoload.php';
			require_once 'credential.php';

			$mail = new PHPMailer(); // Created a new PHPMailer Object to work with

			$mail->IsSMTP(); // enabled SMTP

			$mail->SMTPDebug = 4; // Setting debugging mode: 1 = errors and messages, 2 = messages only

			$mail->SMTPAuth = true; // authentication enabled

			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for G-Mail

			// Setting up G-Mail host and port
			$mail->Host = 'sg2plcpnl0006.prod.sin2.secureserver.net';
			$mail->Port = 465; // or 587

			// Enabled HTML for Mail Body
			$mail->IsHTML(true);

			// G-Mail account credentials for SMTP authentication
			$mail->Username = EMAIL;
			$mail->Password = PASS;
	
			$mail->SetFrom(EMAIL, 'Houston Taxis Service'); // Sender's E-Mail and Name
			$mail->Subject = "OTP Verification";
			$rand = $_SESSION['otp'];
			$msg =  "<div style='border:2px solid red;'> Your OTP for Signing Up in Houston Taxis Service is " . $rand . " </div>";
			
			$mail->Body    = $msg;
			$mail->AltBody = "Your OTP for Signing Up in Houston Taxis Service is " . $rand ;

			$mail->AddAddress($_SESSION['email']);

			$mail->addReplyTo(EMAIL);

			
			if ( ! $mail->Send()) {
			$msge= 'Mailer Error: ' . $mail->ErrorInfo;
			}
			else {
			$msge= 'Message has been sent';
			}	
		
		
		
?>
	    
		<div class="container-login" style="padding: 120px 0 50px 0">
		  <div class="wrap-login">
			<div class="login-form-title" style="background-image: url(./img/bg/register_img.jpg);">
				<span class="login-form-title-1"> Verification </span>
			</div>
            <div class="text-center text-danger py-2">
               <?php if($msg){ echo $msge; } ?>
            </div>
			<form class="login-form" action="otp_verify.php" method="post">
                <div class="wrap-input">
					<span class="label-input"> OTP </span>
					<input class="input" type="text" name="otp" placeholder="Type the OTP here" required>
				</div>
				<div class="container-login-form-btn" style="margin-top: 15px;">
					<input type="submit" name="verify" value="verify" class="login-form-btn">
				</div>
			</form>
		</div>
    </div>

	<?php }else{
		
		header("location: register.php");
	}
}else{
	header("location: register.php");
}

?>


<!-- footer  -->
<?php require_once "includes/footer.php"; ?>
	    
    <script src="assets/jquery/jquery-3.5.1.min.js"></script> 
	<script src="./js/jquery.datetimepicker.full.min.js"></script>

	<script src="assets/bootstrap/bootstrap.min.js"></script>

	<script src="assets/wow.min.js"></script>

	<script src="assets/slick/slick.min.js"></script>

	<script src="assets/fontawesome/fontawesome.min.js"></script>
	
	<script src="./js/script.js"></script>

	<script>
        var loader = document.getElementById('preloader');
        function myfunction(){
            loader.style.display = 'none';	
        }
    </script>

</body>

</html>