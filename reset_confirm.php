<?php 
     require_once "includes/db.php";
    require_once "includes/header.php";
$page = "admin_login";
?>
<?php require_once "includes/navigation.php"; 
if(isset($_POST['Verify '])){
	if(isset($_SESSION['e_rand'])){
		$otp=$_POST['otp'];
	    $c_otp=$_SESSION['e_rand'];
	    if($otp==123){
		header("location: reset_password.php");	
		}
	}else{
		$session['qwe']=$otp;
        header("location: reset_confirm.php");
		
     } 
    }
?>

    <div class="container-login" style="padding: 120px 0 50px 0">
		<div class="wrap-login">
			<div class="login-form-title" style="background-image: url(./img/bg/register_img.jpg);">
				<span class="login-form-title-1"> Verification </span>
			</div>
            <div class="text-center text-danger py-2">
                OTP has been sent to your email address <?php echo $session['qwe'] ?>
            </div>
			<form class="login-form" action="" method="post">
			    <!-- <div class="text-center text-danger my-2 rounded">
                    <h5 style="font-size: 1rem;"><?php echo $msg; ?></h5>
                </div> -->
                <div class="wrap-input">
					<span class="label-input"> OTP </span>
					<input class="input" type="number" name="otp" placeholder="Type the OTP here" required>
				</div>
				<div class="container-login-form-btn" style="margin-top: 15px;">
					<input type="submit" name="Verify" value="Verify" class="login-form-btn">
				</div>
			</form>
		</div>
    </div>

<!-- footer  -->
<?php require_once "includes/footer.php"; ?>
	    
    <script src="assets/jquery/jquery-3.5.1.min.js"></script> 

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
