<?php
include "includes/header.php";
include "includes/db.php";
if(isset($_POST['submit'])){
   $promocode=$_POST['promocode'];
   $query="SELECT * FROM coupon_details WHERE coupon_code='$promocode'";
   $coupon_connection = mysqli_query($connection, $query);
	$count = mysqli_num_rows($coupon_connection);
    if($count == 1) {
        $_SESSION['coupon_code']='$promocode';
        $row=mysqli_fetch_assoc($coupon_connection);
        $coupon_dis = $row['coupon_discount'];
         if($_SESSION['service']=="OneWay"){
            $_SESSION['coupon_discount']= ($_SESSION['oneway_price']*$coupon_dis)/100;
             $_SESSION['discount_oneway_price'] =  ($_SESSION['oneway_price']-$_SESSION['coupon_discount']);
             header("location: billing_info.php");
         }else{
            $_SESSION['coupon_discount']= ($_SESSION['hourly_price']*$coupon_dis)/100;
             $_SESSION['discount_hourly_price'] =  ($_SESSION['hourly_price']-$_SESSION['coupon_discount']);
             header("location: billing_info.php"); 
         }
	
    } else {
		     unset($_SESSION['coupon_code']);
	 		 header("location: billing_info.php"); 

    }
}
?>