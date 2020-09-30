<?php

require('includes/config.php');
require('includes/paypal.php');
require_once('includes/db.php');

if(!isset($_SESSION['id'])){
	header("location: getTaxi.php");
}
$paypal = new PayPal($config);

$result = $paypal->call(array_merge([
    'method'  => 'DoExpressCheckoutPayment',
    'paymentrequest_0_paymentaction' => 'sale',
    'paymentrequest_0_amt'  => $_SESSION['pay_money'],
    'paymentrequest_0_currencycode'  => 'USD',
    'token'  => $_GET['token'],
    'payerid'  => $_GET['PayerID'],
], $_SESSION['SHIPPING']));

if ($result['PAYMENTINFO_0_PAYMENTSTATUS'] == 'Completed') {
    $return = 'Payment completed';
	
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
	    $first_name=$_SESSION['first_name'];
	    $last_name=$_SESSION['last_name'];
	    $phone = $_SESSION['phone'];
	    $request=$_SESSION['request'];
	    $transction_id = $result['PAYMENTINFO_0_TRANSACTIONID'];
	    $payment_amount = $_SESSION['pay_money'];
    $query = "INSERT INTO booking(first_name, last_name, ph_number, coustomer_id, pickup_address, dropup_address,  booking_date, booking_time, passengers, luggage, booking_hour, payment_mode, payment_amount, transaction_id, booking_car_type, special_request) ";
	
      $query .= "VALUES('{$first_name}','{$last_name}', '{$phone}','{$customer_id}', '{$pickup}', '{$dropoff}', '{$date}', '{$time}', '{$passenger}', '{$luggage}', '{$hours}', 'Paypal (Completed)', '{$payment_amount}', '{$transction_id }', '{$car_name}', '{$request}') ";
      $create_email_query = mysqli_query($connection, $query);	
      if(!$create_email_query){	
	      die( "failed " . mysqli_error($connection));
   	  }else{
		  unset($_SESSION['id']);
		  unset($_SESSION['distance']);
		  unset($_SESSION['pickup']);
		  unset($_SESSION['dropoff']);
		  unset($_SESSION['pay_money']);
		  header("location: my_booking.php");
	  }
		
} else {
    $return = 'Handle payment execution failure';
}
       
	

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container {
            max-width: 960px;
        }

        .lh-condensed { line-height: 1.25; }
        .bg-light{
            background-color: #f8f9fa!important;
        }
    </style>
</head>
<body class="bg-light">
<div class="container justify-content-center">
    <div class="py-5 text-center">
        <h2>Sucess!</h2>
        <p class="lead"><?= $return ?></p>
        <p class="lead">Transaction ID: <?= $result['PAYMENTINFO_0_TRANSACTIONID'] ?></p>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019 Rafael Corrêa Gomes</p>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

