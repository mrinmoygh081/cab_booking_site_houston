<?php 
     require_once "includes/db.php";
    require_once "includes/header.php";
$page = "admin_login";
?>
<?php require_once "includes/navigation.php"; ?>

<div class="register">
    <div class="register_position">
        <div class="text-center register_heading">
            <h2>Login To Your Account</h2>
        </div>
        <form action="loginprocess.php" method="post">
            <div class="form-group">
                <label class="register_label" for="">Mobile</label>
                <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile number" required>
            </div>
            <div class="form-group">
                <label class="register_label" for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="text-center">
                <input class="btn_stylish register_btn" type="submit" name="login" value="Login">
            </div>
        </form>
        <hr>
        <div class="text-center">
            <p class="txt1"><a href="register.php">New? Create an account </a></p>
        </div>
    </div>
    <div class="register_ob">
        <div class="login_content">
            <h2> <span style="color: #FFC107"> Houston </span> Taxis Service </h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit rerum quis laborum omnis architecto,
            deserunt incidunt recusandae eligendi alias perspiciatis, accusantium sunt accusamus quos ullam ipsam vitae dolor blanditiis aliquam.</p>
        </div>
    </div>
</div>
<div class="bg_overlay_fullWidth mobile_none"></div>


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