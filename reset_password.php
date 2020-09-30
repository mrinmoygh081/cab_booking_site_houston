<?php 
     require_once "includes/db.php";
    require_once "includes/header.php";
$page = "admin_login";
?>
<?php require_once "includes/navigation.php"; 
if(isset($_POST['submit'])){
	$password = $_POST['password'];
	$c_password = $_POST['c_password'];
	if($password==$c_password){
		$password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));
		$email=$_SESSION['r_email'];
		$query="UPDATE customer_details SET customer_password='$password' WHERE id='$email'";
		 $u_password = mysqli_query($connection, $query);
		echo "done";
	}
}
?>

    <div class="container-login" style="padding: 120px 0 50px 0">
		<div class="wrap-login">
			<div class="login-form-title" style="background-image: url(./img/bg/register_img.jpg);">
				<span class="login-form-title-1"> Set New Password </span>
			</div>
			<form class="login-form" method="post" action="">
                <!-- <div class="text-center text-danger my-2 rounded">
                    <h5 style="font-size: 1rem;"><?php echo $msg; ?></h5>
                </div> -->
                <div class="wrap-input">
					<span class="label-input"> Set Password </span>
					<input class="input" type="password" name="password" placeholder="Set the password here" required>
				</div>
                <div class="wrap-input">
					<span class="label-input"> Confirm Password </span>
					<input class="input" type="password" name="c_password" placeholder="Retype the password here" required>
				</div>
				<div class="container-login-form-btn" style="margin-top: 15px;">
					<input type="submit" name="submit" value="Done" class="login-form-btn">
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
