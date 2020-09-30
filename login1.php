<?php 
    require_once "includes/db.php";
    require_once "includes/header.php";
    $page = "login";
    require_once "includes/navigation.php";
?>
    <!-- /header -->
<section ></section>
    <!-- login -->
    <div class="container-login" style="padding-top: 150px; padding-bottom:40px;">
		<div class="wrap-login" >
			<div class="login-form-title" style="background-image: url(img/slider/slider3.jpg);">
				<span class="login-form-title-1"> Login </span>
			</div>
			<form action="loginprocess.php" class="login-form" method="post">
                
				<div class="wrap-input">
					<span class="label-input">Mobile</span>
					<input class="input" type="text" name="mobile" placeholder="Enter your mobile number" required>
				</div>
                <div class="wrap-input">
					<span class="label-input"> Password </span>
					<input class="input" type="password" name="password" placeholder="Enter your password" required>
				</div>
				<div class="forgot py-3 d-flex">
					<div class="form-check form-check-inline">
						<input class="form-check-input" id="inlineCheckbox1" type="checkbox" value="" >
						<label class="label-checkbox txt1 m-0" for="ckb1"> Remember me </label>
					</div>
					<div>
						<p class="txt1"><a href="register.php">New? Create an account </a></p>
					</div>
				</div>
				<div class="container-login-form-btn">
					<input type="submit" name="login" value="Login" class="login-form-btn">
				</div>
			</form>
		</div>
    </div>
    <!-- /login -->


    <!-- footer  -->
<?php 
require_once "includes/footer.php";
 ?>
     
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