

<?php

include "includes/header.php";
include "includes/db.php";
if(!isset($_SESSION['id'])){
 header("location: getTaxi.php");
	}
if(isset($_POST['done'])){
	
	if(!isset($_SESSION['id'])) {
        header("location: getTaxi.php");
    }
		$_SESSION['first_name'] =htmlspecialchars(stripslashes(trim($_POST['first_name']))) ;
		$_SESSION['last_name'] =htmlspecialchars(stripslashes(trim($_POST['last_name']))) ;
		$_SESSION['phone'] =htmlspecialchars(stripslashes(trim($_POST['phone']))) ;
		$customer_id = $_SESSION['customer_id'];
        $date =   $_SESSION['date']; 
		$time = $_SESSION['time']; 
		$service = $_SESSION['service']; 
		$pickup = $_SESSION['pickup']; 
		$dropoff = $_SESSION['dropoff']; 
		$hours = $_SESSION['hours']; 
		$passenger = $_SESSION['passenger']; 
		$luggage = $_SESSION['luggage']; 
        $car_name = $_SESSION['car_name'];
		$_SESSION['request'] =htmlspecialchars(stripslashes(trim($_POST['request']))) ;
	    $first_name=$_SESSION['first_name'];
	    $last_name=$_SESSION['last_name'];
	    $phone = $_SESSION['phone'];
	    $request = $_SESSION['request'];
	    $pay_type =htmlspecialchars(stripslashes(trim($_POST['pay_type']))) ;
	    if(!isset($pay_type)){
	   header("location: billing_info.php");	
	   }else {
            if ($pay_type == "pay_after") {
                $payment_amount = $_SESSION['pay_money'];

                $query = "INSERT INTO booking(first_name, last_name, ph_number, coustomer_id, pickup_address, dropup_address,  booking_date, booking_time, passengers, luggage, booking_hour, payment_mode, payment_amount, transaction_id, booking_car_type, special_request) ";

                $query .= "VALUES('{$first_name}','{$last_name}', '{$phone}','{$customer_id}', '{$pickup}', '{$dropoff}', '{$date}', '{$time}', '{$passenger}', '{$luggage}', '{$hours}', 'Pay after ride', '{$payment_amount}', '1234', '{$car_name}', '{$request}') ";
                $create_email_query = mysqli_query($connection, $query);
                if (!$create_email_query) {
                    die("failed " . mysqli_error($connection));
                } else {
                    unset($_SESSION['id']);
                    unset($_SESSION['distance']);
                    unset($_SESSION['pickup']);
                    unset($_SESSION['dropoff']);
                    unset($_SESSION['pay_money']);
                    header("location: my_booking.php");
                }

            } elseif ($pay_type == "pay_now") {
                header("location: start.php");
            } else {
                header("location: billing_info.php");
            }
        }
}
?>