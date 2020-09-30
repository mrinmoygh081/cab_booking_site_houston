<?php
 require_once "includes/db.php";
    require_once "includes/header.php";
if(isset($_POST['verify'])){
	$otp = $_POST['otp'];
	$otp2 = $_SESSION['otp'];
	if($otp==$otp2){
	 $full_name=$_SESSION['full_name'];
     $email=$_SESSION['email'];
	 $phone=$_SESSION['phone'];
		 $query = "SELECT * FROM customer_details WHERE customer_ph = '$phone'";
			 $c_phone= mysqli_query($connection , $query);
		     $count_phone = mysqli_num_rows($c_phone);
		      if($count_phone==0){
				  $password=$_SESSION['password'];
				  $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));
				  $query = "INSERT INTO customer_details(customer_name, customer_email, customer_ph, customer_password) ";
				  $query .= "VALUES('{$full_name}', '{$email}', '{$phone}', '{$password}')";
				  $insert_customer = mysqli_query($connection, $query);	
				 if(!$insert_customer){
			   die( "failed " . mysqli_error($connection));
			}else{
					 $query = "SELECT * FROM customer_details WHERE customer_ph = '$phone'";
					 $log_in= mysqli_query($connection , $query);
					 if(!$log_in){
			   die( "failed " . mysqli_error($connection));
					 }
					 $count = mysqli_num_rows($log_in);
					 if($count == 1){
						 $row=mysqli_fetch_assoc($log_in);
						echo $_SESSION['customer_id']=$row['customer_id'];
						echo $_SESSION['customer_name']=$row['customer_name'];
						echo $_SESSION['customer_email']=$row['customer_email'];
					 }
					 if(isset($_SESSION['id'])){
						header("location: billing_info.php"); 
					 }else{
						 header("location: index.php"); 
					 }
				 }
		}else{
				  header("location: register.php");
			  }
           
}
}
?>