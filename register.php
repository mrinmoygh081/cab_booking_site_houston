<?php 
     require_once "includes/db.php";
    require_once "includes/header.php";
$page = "admin_login";
?>
<?php require_once "includes/navigation.php"; ?>

<div class="register">
    <div class="register_position">
        <div class="text-center register_heading">
            <h2>Create Account</h2>
        </div>
        <form action="register_confirm.php" method="post">
            <div class="form-group">
                <label class="register_label" for="">Full Name</label>
                <input type="text" name="full_name" class="form-control" placeholder="Your Full Name" required>
            </div>
           <div class="form-group">
                <label class="register_label" for="">Your Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
             <div class="form-group">
                <label class="register_label" for="">Your Phone Number</label>
                <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <label class="register_label" for="">Set Password</label>
                <input type="password" name="password" class="form-control" placeholder="Set Your Password" required>
            </div>
            <div class="form-group">
                <label class="register_label" for="">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="Type Your Password Again" required>
            </div>
            <p>By clicking Register, you agree to our 
                <a type="button" class="terms">Terms & Conditions</a>
                and 
                <a type="button" class="terms"> Privacy Policy </a>. 
            </p>
            <div class="text-center">
                <input class="btn_stylish register_btn" type="submit" name="signup" value="Signup">
            </div>
        </form>
        <hr>
        <div class="text-center">
            <p class="txt1"><a href="login.php">Already have An Account? </a></p>
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