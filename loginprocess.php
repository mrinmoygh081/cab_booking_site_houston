<?php 
session_start();
require_once 'includes/db.php'; 
if(isset($_POST) & !empty($_POST)) {
	$mobile =htmlspecialchars(stripslashes(trim($_POST['mobile'])));
	$password =htmlspecialchars(stripslashes(trim($_POST['password'])));
	$query = "SELECT * FROM customer_details WHERE customer_ph = '$mobile'";
	$verify_query = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($verify_query);
	$count = mysqli_num_rows($verify_query);
	if($count == 1) {
		$check_pw = $row['customer_password'];
		if(password_verify($password, $check_pw)) {
            $_SESSION['customer_id'] = $row['customer_id'];
            $_SESSION['customer_name'] = $row['customer_name'];
            $_SESSION['customer_email'] = $row['customer_email'];
            if(isset($_SESSION['id'])) {
                header("location: billing_info.php");
            } else {
                header("location: index.php");
            }
		}else{
            $_SESSION['pass_error'] = "Password does not match.";
            header("location: login.php");
        }
	}else{
	    $_SESSION['ph_error'] = "Phone number does not exit.";
        header("location: login.php");
    }
}
?>