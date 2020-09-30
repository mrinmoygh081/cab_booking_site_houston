<?php 
     require_once "includes/db.php";
    require_once "includes/header.php";
$page = "admin_login";
?>
<?php require_once "includes/navigation.php"; 
if(isset($_POST['register'])){
	$email=$_POST['email'];
	$query="SELECT * FROM customer_details WHERE customer_email='$email'";
	$email_query=mysqli_query($connection, $query);
	if(!$email_query){
		die ("faild" . mysqli_error($connection));
	}
	$count=mysqli_num_rows($email_query);
	if($count==1){
		$_SESSION['r_email']=$email;
		$_SESSON['e_rand']=123;
		header("location: reset_confirm.php"); 
	}else{
		
	}
}
?>

    <!-- register -->
    <div class="container-login" style="padding: 120px 0 50px 0">
		<div class="wrap-login">
			<div class="login-form-title" style="background-image: url(./img/bg/register_img.jpg);">
				<span class="login-form-title-1"> Reset Your Password </span>
			</div>
			<form class="login-form" action="" method="post">
               	<!-- <div class="text-center text-danger my-2 rounded">
                    <h5 style="font-size: 1rem;"><?php echo $msg; ?></h5>
				</div> -->
				<div class="wrap-input">
					<span class="label-input">Email</span>
					<input class="input" type="email" name="email" placeholder="Enter your registered email" required>
				</div>
				
			    <div class="container-login-form-btn">
				<br><br>
					<input style="margin-top: 15px;" type="submit" name="register" value="Continue" class="login-form-btn">
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
